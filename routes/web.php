<?php

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Product\DetailController;
use App\Http\Controllers\Product\ShopController;

use App\Http\Controllers\User\Auth\ForgotPasswordController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Cart\CartSessionController;
use App\Http\Controllers\Cart\CartController;

use App\Http\Controllers\Favorites\FavoritesController;
use App\Http\Controllers\Favorites\FavoritesSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Paige
Route::get('/', [HomeController::class, 'index'])->name('home');

// User Auth
Route::group(['namespace' => 'App\Http\Controllers\User\Auth'], function () {
    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('user.register');
    Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

    Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('user.login');
    Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

    Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('user.logout');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->middleware('guest')->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->middleware('guest')->name('password.email');

    Route::get('/reset-password', [ResetPasswordController::class, 'index'])->middleware('guest')->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'store'])->middleware('guest')->name('password.update');
});

// Shop
Route::group(['namespace' => 'App\Http\Controllers\Product'], function () {
    Route::get('/shop', ShopController::class)->name('product.shop');
    Route::get('/shop/{product:slug}', DetailController::class)->name('product.detail');
});


// Cart Session (для гостей)
Route::group(['namespace' => 'App\Http\Controllers\Cart', 'middleware' => 'web'], function () {
    Route::post('/cart_session', [CartSessionController::class, 'add'])->name('cart_session.add');
    Route::delete('/cart_session/{product}', [CartSessionController::class, 'remove'])->name('cart_session.remove');
    Route::delete('/cart_session/{product}/decrease', [CartSessionController::class, 'decreaseQuantity'])->name('cart_session.decrease');
    Route::post('/cart_session/{product}/increase', [CartSessionController::class, 'increaseQuantity'])->name('cart_session.increase');
});

Route::get('/cart', function () {
    if (auth()->check()) {
        return app(CartController::class)->show();
    } else {
        return app(CartSessionController::class)->show();
    }
})->name('cart.show');

// Cart (для авторизованных пользователей)
Route::group(['namespace' => 'App\Http\Controllers\Cart', 'middleware' => ['auth']], function () {
    Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/{product}/decrease', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
    Route::post('/cart/{product}/increase', [CartController::class, 'increaseQuantity'])->name('cart.increase');
});


// Favorites Session (для гостей)
Route::group(['namespace' => 'App\Http\Controllers\Favorites', 'middleware' => 'web'], function () {
    Route::post('/favorites_session', [FavoritesSessionController::class, 'add'])->name('favorites_session.add');
    Route::delete('/favorites_session/{product}', [FavoritesSessionController::class, 'remove'])->name('favorites_session.remove');
});

Route::get('/favorites', function () {
    if (auth()->check()) {
        return app(FavoritesController::class)->show();
    } else {
        return app(FavoritesSessionController::class)->show();
    }
})->name('favorites.show');

// Favorites (для авторизованных пользователей)
Route::group(['namespace' => 'App\Http\Controllers\Favorites', 'middleware' => ['auth']], function () {
    Route::post('/favorites', [FavoritesController::class, 'add'])->name('favorites.add');
    Route::delete('/favorites/{product}', [FavoritesController::class, 'remove'])->name('favorites.remove');
});