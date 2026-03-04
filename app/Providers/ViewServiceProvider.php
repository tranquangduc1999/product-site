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

            $settings = Cache::rememberForever('site_settings', function () {
                return Setting::first();
            });

            $headerMenu = Cache::rememberForever('header_menu', function () {
                return Menu::where('location', 'header')
                    ->with('items.children')
                    ->first();
            });
            $footerMenu = Cache::rememberForever('footer_menu', function () {
                return Menu::where('location', 'footer')
                    ->with('items.children')
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
