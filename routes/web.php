<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\WarrantyLookupController;
use App\Http\Controllers\SitemapController;
use App\Models\Product;
use App\Models\Post;
use App\Models\Page;
Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);

Route::get('/blogs', [PostController::class, 'index']);
Route::get('/blog/{slug}', [PostController::class, 'show']);
Route::get('/checkout', [CartController::class, 'showCheckout'])->name('checkout');
Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout.post');
Route::get('/order-success/{id}', [CartController::class, 'success'])->name('order.success');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/tra-cuu-bao-hanh', [WarrantyLookupController::class, 'index'])->name('warranty.lookup');
Route::post('/tra-cuu-bao-hanh', [WarrantyLookupController::class, 'search'])->name('warranty.search');
Route::get('/page/{slug}', [PageController::class, 'show']);
Route::get('/pages/gioi-thieu',function (){
    return view('frontend.about.about');
});
Route::get('/products/filter', [ProductController::class, 'filter'])
    ->name('products.filter');
Route::get('/products-by-filter', [ProductController::class, 'getProductsByCategory'])->name('product.byCategory');
//SITEMAP AUTO GENERATE
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/products-by-category/{id}', [ProductController::class, 'getByCategory'])->name('product.byCategory');
