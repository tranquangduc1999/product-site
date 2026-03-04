<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
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
}
