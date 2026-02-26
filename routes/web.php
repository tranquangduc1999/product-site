<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\PageController;
use App\Models\Product;
use App\Models\Post;
use App\Models\Page;
Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{slug}', [PostController::class, 'show']);

Route::get('/{slug}', [PageController::class, 'show']);

//SITEMAP AUTO GENERATE
Route::get('/sitemap.xml', function () {

    $products = Product::published()->get();
    $posts = Post::published()->get();
    $pages = Page::published()->get();

    return response()->view('sitemap', compact(
        'products',
        'posts',
        'pages'
    ))->header('Content-Type', 'text/xml');

});
