<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Setting;
use App\Models\Menu;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('*', function ($view) {

            // ✅ Load settings (1 record duy nhất)
            $settings = Cache::rememberForever('site_settings', function () {
                return Setting::first();
            });
            // ✅ Load menu
            $headerMenu = Cache::rememberForever('header_menu', function () {
                return Menu::where('location', 'header')
                    ->with(['items' => function ($query) {
                        $query->whereNull('parent_id')
                            ->with('children')
                            ->orderBy('sort_order');
                    }])
                    ->first();
            });

            $footerMenu = Cache::rememberForever('footer_menu', function () {
                return Menu::where('location', 'footer')
                    ->with('items')
                    ->first();
            });
            $view->with([
                'settings' => $settings,
                'headerMenu' => $headerMenu,
                'footerMenu' => $footerMenu,
            ]);
        });
    }
}
