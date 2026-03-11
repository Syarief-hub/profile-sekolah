<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

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
        // Share settings to all views globally
        if (Schema::hasTable('settings')) {
            $settingsRaw = Setting::all();
            $global_settings = [];
            foreach ($settingsRaw as $setting) {
                $global_settings[$setting->key] = $setting->value;
            }
            View::share('global_settings', $global_settings);
        }
    }
}
