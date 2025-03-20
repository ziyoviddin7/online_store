<?php

namespace App\Providers;

use App\Models\Category;
use App\Services\Cart\Service;
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

        // Передача categories во все Blade-шаблоны
        View::composer('*', function ($view) {
            $view->with('categories', Category::all());
        });
        
        // Передача items из Session Cart во все Blade-шаблоны
        View::composer('*', function ($view) {
            $cart = app(Service::class);
            $view->with('cart_items', $cart->getItemsSession());
        });
    }
}
