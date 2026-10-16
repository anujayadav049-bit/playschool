<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CustomPage;
use App\Models\HomeSetting;
use Illuminate\Support\Facades\View;

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
        // Header me Custom Pages + HomeSetting dikhane ke liye
        try {
            View::composer('*', function ($view) {
                $view->with('customPages', CustomPage::latest()->get());
                $view->with('homeSetting', HomeSetting::first());
            });
        } catch (\Exception $e) {
            // Table abhi migrate nahi hua to error na aaye
        }
    }
}