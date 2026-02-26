<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Post;
use App\Models\Setting;

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

        $banner = Setting::getValue('homepage_banner');

        return view('frontend.home', compact(
            'products',
            'posts',
            'banner'
        ));
    }
}
