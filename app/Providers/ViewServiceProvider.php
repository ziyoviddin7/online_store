<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Передача user во все Blade-шаблоны
        View::composer('*', function ($view) {
            $view->with('user', auth()->user());
        });
        View::composer('*', function ($view) {
            $view->with('categories', Category::all());
        });
    }
}
