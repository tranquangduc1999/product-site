<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class ProductController extends Controller
{
    public function index()
    {
        $query = Product::published()->with('category');

        if (request('category')) {
            $category = ProductCategory::where('slug', request('category'))->firstOrFail();
            $query->where('product_category_id', $category->id);
        }

        $products = $query->latest('published_at')->paginate(12);
        $categories=ProductCategory::all();
        $brands=Brand::all();
        return view('frontend.products.index', compact('products','brands','categories'));
    }

    public function show($slug)
    {
        $product = Product::published()
            ->where('slug', $slug)
            ->with('category')
            ->firstOrFail();
        $newProducts = Product::published()->orderBy('id','DESC')->take(4)->get();
        $related = Product::published()
            ->where('product_category_id', $product->product_category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('frontend.products.show', compact('product', 'related','newProducts'));
    }
    public function getProductsByCategory(Request $request)
    {
        $slug = $request->get('slug');
        $categoryId = $request->get('id');
        $brands = $request->get('brands', []);
        $priceMin = $request->get('price_min');
        $priceMax = $request->get('price_max');

        $productsQuery = Product::published()
            ->where('status', 1);

        if ($categoryId) {
            $productsQuery->where('product_category_id', $categoryId);
        }

        if (!empty($brands)) {
            $productsQuery->whereIn('brand_id', $brands);
        }

        if (!empty($priceMin) && !empty($priceMax)) {

            $productsQuery->where(function ($q) use ($priceMin, $priceMax) {

                $q->whereBetween('sale_price', [$priceMin, $priceMax])
                    ->orWhere(function ($q2) use ($priceMin, $priceMax) {

                        $q2->whereNull('sale_price')
                            ->whereBetween('price', [$priceMin, $priceMax]);

                    });

            });

        } elseif (!empty($priceMin)) {

            $productsQuery->where(function ($q) use ($priceMin) {

                $q->where('sale_price', '>=', $priceMin)
                    ->orWhere(function ($q2) use ($priceMin) {

                        $q2->whereNull('sale_price')
                            ->where('price', '>=', $priceMin);

                    });

            });

        }

        switch ($request->get('sort')) {
            case 'name_asc':
                $productsQuery->orderBy('name', 'asc');
                break;

            case 'name_desc':
                $productsQuery->orderBy('name', 'desc');
                break;

            case 'price_asc':
                $productsQuery->orderByRaw('COALESCE(sale_price, price) ASC');
                break;

            case 'price_desc':
                $productsQuery->orderByRaw('COALESCE(sale_price, price) DESC');
                break;

            case 'newest':
                $productsQuery->latest();
                break;

            default:
                $productsQuery->latest();
                break;
        }

        $products = $productsQuery->paginate(12)
            ->appends([
                'slug' => $slug,
                'brands' => $brands,
                'price_min' => $priceMin,
                'price_max' => $priceMax
            ]);

        return view('frontend.products.listproduct', [
            'listProduct' => $products
        ])->render();
    }
}
