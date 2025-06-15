<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Config;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $configSetting = [];
            $cacheKey = 'config_settings';
            $cacheMinutes = 120;

            if (Cache::has($cacheKey)) {
                $configSetting = Cache::get($cacheKey);
            } else {
                $configSetting = Config::all()->pluck('value', 'key');
                Cache::put($cacheKey, $configSetting, now()->addMinutes($cacheMinutes));
            }

            $view->with('configSetting', $configSetting);
        });
    }
}
