<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Product\DetailController;
use App\Http\Controllers\Product\ShopController;

use App\Http\Controllers\User\Auth\ForgotPasswordController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Auth\ResetPasswordController;

use App\Http\Controllers\User\Profile\ProfileController;

use App\Http\Controllers\Cart\CartSessionController;
use App\Http\Controllers\Cart\CartController;

use App\Http\Controllers\Favorites\FavoritesController;
use App\Http\Controllers\Favorites\FavoritesSessionController;

use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Order\ShowOrderController;


// Home Paige
Route::get('/', [HomeController::class, 'index'])->name('home');


// User Auth
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('user.register');
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'index'])->name('user.login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('password.email');

    Route::get('/reset-password', [ResetPasswordController::class, 'index'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'store'])->name('password.update');
});
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('user.logout');


// User Profile
Route::prefix('/my/profile')->middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/information', 'information')->name('user.profile.information');
        Route::patch('/information/edit', 'edit')->name('user.profile.edit');
        Route::patch('/information/avatar/edit', 'editProfileAvatar')->name('user.profile.avatar');
    });
});


// Shop
Route::group(['namespace' => 'App\Http\Controllers\Product'], function () {
    Route::get('/shop', ShopController::class)->name('product.shop');
    Route::get('/shop/{product:slug}', DetailController::class)->name('product.detail');
});


// Guest Cart
Route::middleware('web')->group(function () {
    Route::post('/cart_session', [CartSessionController::class, 'add'])->name('cart_session.add');
    Route::delete('/cart_session/{product}', [CartSessionController::class, 'remove'])->name('cart_session.remove');
    Route::delete('/cart_session/{product}/decrease', [CartSessionController::class, 'decreaseQuantity'])->name('cart_session.decrease');
    Route::post('/cart_session/{product}/increase', [CartSessionController::class, 'increaseQuantity'])->name('cart_session.increase');
});

Route::get('/my/cart', function () {
    if (auth()->check()) {
        return app(CartController::class)->show();
    } else {
        return app(CartSessionController::class)->show();
    }
})->name('cart.show');


// Auth Cart
Route::middleware('auth')->group(function () {
    Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/{product}/decrease', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
    Route::post('/cart/{product}/increase', [CartController::class, 'increaseQuantity'])->name('cart.increase');
});


// Guest Favorites
Route::middleware('web')->group(function () {
    Route::post('/favorites_session', [FavoritesSessionController::class, 'add'])->name('favorites_session.add');
    Route::delete('/favorites_session/{product}', [FavoritesSessionController::class, 'remove'])->name('favorites_session.remove');
});

Route::get('/my/favorites', function () {
    if (auth()->check()) {
        return app(FavoritesController::class)->show();
    } else {
        return app(FavoritesSessionController::class)->show();
    }
})->name('favorites.show');

// Auth Favorites
Route::middleware('auth')->group(function () {
    Route::post('/favorites', [FavoritesController::class, 'add'])->name('favorites.add');
    Route::delete('/favorites/{product}', [FavoritesController::class, 'remove'])->name('favorites.remove');
});


// Create Order And YooKassa Payment
Route::prefix('/order')->middleware('auth')->group(function () {
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('order.checkout');
    Route::get('/callback/{order_id}', [OrderController::class, 'callback'])->name('order.callback');

    Route::post('/checkout', [OrderController::class, 'store'])->name('order.checkout.store');
});

// YooKassa Webhook
Route::post('/order/webhook', [OrderController::class, 'handleWebhook'])->name('order.checkout.webhook');

// Show Order
Route::middleware('auth')->group(function () {
    Route::get('/my/order_list', [ShowOrderController::class, 'order_list'])->name('order.order_list');
    Route::get('/my/order_details/{order}', [ShowOrderController::class, 'order_details'])->name('order.order_details');
});
