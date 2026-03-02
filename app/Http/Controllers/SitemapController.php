<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $products = Product::where('status', 1)->get();
        $posts    = Post::where('status', 1)->get();
        $pages    = Page::where('status', 1)->get();

        return response()
            ->view('sitemap', compact('products', 'posts', 'pages'))
            ->header('Content-Type', 'text/xml');
    }
}
