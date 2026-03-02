<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $banners = [
            [
                'title' => 'Banner Trang Chủ 1',
                'image' => 'banners/home-1.jpg',
                'link' => '/products',
                'position' => 'homepage',
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'title' => 'Banner Trang Chủ 2',
                'image' => 'banners/home-2.jpg',
                'link' => '/posts',
                'position' => 'homepage',
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'title' => 'Banner Sidebar',
                'image' => 'banners/sidebar.jpg',
                'link' => '/contact',
                'position' => 'sidebar',
                'sort_order' => 1,
                'status' => true,
            ],
        ];

        foreach ($banners as $banner) {
            Banner::create($banner);
        }
    }
}
