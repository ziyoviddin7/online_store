<?php

namespace App\Providers;

use App\Models\Category;
use App\Services\Cart\Cart;
use App\Services\Cart\CartSession;
use App\Services\Favorites\Favorites;
use App\Services\Favorites\FavoritesSession;
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
            $cart = app(CartSession::class);
            $cartSession_items = $cart->getCartItems();
            $cartSession_total = $cart->getTotal();
            $view->with(compact('cartSession_items', 'cartSession_total'));
        });

        // Передача items из Cart во все Blade-шаблоны
        View::composer('*', function ($view) {
            $cart = app(Cart::class);
            $cart_items = $cart->getCartItems();
            $total = $cart->getTotal();
            $view->with(compact('cart_items', 'total'));
        });

        View::composer('*', function ($view) {
            $favorites = app(FavoritesSession::class);
            $favoritesSession_items = $favorites->getFavoritesItems();
            $favoritesSession_total_quantity = $favorites->getTotalQuantity();
            $view->with(compact('favoritesSession_items', 'favoritesSession_total_quantity'));
        });


        
    }
}
