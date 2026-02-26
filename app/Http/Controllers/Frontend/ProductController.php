<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;

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

        return view('frontend.products.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::published()
            ->where('slug', $slug)
            ->with('category')
            ->firstOrFail();

        $related = Product::published()
            ->where('product_category_id', $product->product_category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('frontend.products.show', compact('product', 'related'));
    }
}
