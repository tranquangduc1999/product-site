<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Setting;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $settings = Cache::rememberForever('site_settings', function () {
                return Setting::pluck('value', 'key')->toArray();
            });

            $view->with('settings', $settings);
        });
    }
}
