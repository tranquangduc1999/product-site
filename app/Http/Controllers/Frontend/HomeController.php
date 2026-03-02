<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Post;
use App\Models\ProductCategory;
use App\Models\Setting;
use App\Models\Banner;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categoriesWithProducts = ProductCategory::where('status', true)
            ->with(['products' => function ($query) {
                $query->published()
                    ->latest('published_at')
                    ->take(6);
            }])
            ->get();
        $categories=ProductCategory::all();
        $posts = Post::published()
            ->latest('published_at')
            ->take(3)
            ->get();

        $sliders = Banner::where('position', 'slider')
            ->where('status', true)
            ->orderBy('sort_order')
            ->get();

        $banners = Banner::where('position', 'homepage')
            ->where('status', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.home', compact(
            'categoriesWithProducts',
            'posts',
            'banners',
            'categories',
            'sliders'
        ));
    }
}
