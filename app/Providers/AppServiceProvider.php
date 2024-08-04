<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::component('admin.layouts.admin-layout', 'admin-layout');
        Blade::component('admin.layouts.adminbar', 'adminbar');
        Blade::component('admin.layouts.admin-navbar', 'admin-navbar');
        Blade::component('admin.layouts.admin-footer', 'admin-footer');


    }
}
