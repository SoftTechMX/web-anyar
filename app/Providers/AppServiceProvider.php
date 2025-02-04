<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use App\Models\UiNavbarMenu;
use App\Models\Service;
use App\Models\UiAppSettings;
use Exception;

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
        Paginator::useBootstrapFive();

        try {
            
            $app_settings = UiAppSettings::find(1);
            $ui_menu = UiNavbarMenu::all();
            $services = Service::all();
            
            View::share('ui_menus', $ui_menu);
            View::share('services', $services);
            View::share('app_settings', $app_settings);
        } catch (Exception $e) {
        }
    }
}
