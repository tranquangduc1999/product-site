<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Post;
use App\Models\ProductCategory;
use App\Models\Setting;
use App\Models\Banner;
use App\Models\Testimonial;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::where('status', true)
            ->with(['products' => function ($query) {
                $query->published()
                    ->latest('published_at')
                    ->limit(8);
            }])->orderBy('sort_order',"ASC")
            ->get();
        $firstCategory = $categories->first();
        $listProduct = $firstCategory
            ? Product::where('product_category_id', $firstCategory->id)->get()
            : collect();
        $categoriesWithProducts = ProductCategory::where('status', true)
            ->with(['products' => function ($query) {
                $query->published()
                    ->latest('published_at')
                    ->take(6);
            }])
            ->get();

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
        $handover = Banner::where('position', 'handover')
            ->where('status', true)
            ->orderBy('sort_order')
            ->get();
        $testimonials = Testimonial::where('status', true)
            ->orderBy('sort_order','asc')->get();
        return view('frontend.home', compact(
            'categoriesWithProducts',
            'posts',
            'banners',
            'categories',
            'testimonials',
            'handover',
            'listProduct',
            'sliders'
        ));
    }
}
