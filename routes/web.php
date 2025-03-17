<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product\IndexController;

use App\Http\Controllers\User\Auth\ForgotPasswordController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class , 'index'])->middleware('auth')->name('home');

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

Route::group(['namespace' => 'App\Http\Controllers\Product'], function () {
    Route::get('/shop', [IndexController::class, 'index'])->name('product.shop');
});