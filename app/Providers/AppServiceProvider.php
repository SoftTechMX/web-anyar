<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

use App\Models\UiNavbarMenu;
use App\Models\Service;
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
        
        try
        {
            $ui_menu = UiNavbarMenu::all();
            $services = Service::all();
    
            View::share('ui_menus', $ui_menu);
            View::share('services', $services);
        }
        catch(Exception $e)
        {
            
        }
    }
}