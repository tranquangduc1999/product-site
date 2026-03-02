<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Banner;
class HomeController extends Controller
{
    public function index()
    {
        $products = Product::published()
            ->latest('published_at')
            ->take(6)
            ->get();

        $posts = Post::published()
            ->latest('published_at')
            ->take(3)
            ->get();
        $banners = Banner::where('position', 'homepage')
            ->where('status', true)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.home', compact(
            'products',
            'posts',
            'banners',
        ));
    }
}
