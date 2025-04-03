<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Order;
use App\Services\Cart\Cart;
use App\Services\Cart\CartService;
use App\Services\Cart\CartSession;
use App\Services\Cart\CartSessionService;
use App\Services\Favorites\Favorites;
use App\Services\Favorites\FavoritesService;
use App\Services\Favorites\FavoritesSession;
use App\Services\Favorites\FavoritesSessionService;
use Illuminate\Support\Facades\Auth;
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
            $view->with('user', Auth::user());
        });

        // Передача categories во все Blade-шаблоны
        View::composer('*', function ($view) {
            $view->with('categories', Category::all());
        });
        
        // Передача items из Session Cart во все Blade-шаблоны
        View::composer('*', function ($view) {
            $cart = app(CartSessionService::class);
            $cartSession_items = $cart->getCartItems();
            $cartSession_total = $cart->getTotal();
            $view->with(compact('cartSession_items', 'cartSession_total'));
        });

        // Передача items из Cart во все Blade-шаблоны
        View::composer('*', function ($view) {
            $cart = app(CartService::class);
            $cart_items = $cart->getCartItems();
            $total = $cart->getTotal();
            $view->with(compact('cart_items', 'total'));
        });

        View::composer('*', function ($view) {
            $favorites = app(FavoritesSessionService::class);
            $favoritesSession_items = $favorites->getFavoritesItems();
            $view->with(compact('favoritesSession_items'));
        });

        View::composer('*', function ($view) {
            $favorites = app(FavoritesService::class);
            $favorites_items = $favorites->getFavoritesItems();
            $view->with(compact('favorites_items'));
        });

        View::composer('*', function ($view) {
            $userID = Auth::id();
            $orders = Order::where('user_id', $userID)->get();
            $view->with(compact('orders'));
        });
        
    }
}
