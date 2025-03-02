<?php

use App\Http\Controllers\Product\IndexController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
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

Route::group(['namespace' => 'App\Http\Controllers\User'], function() {
    Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('user.register');
    Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

    Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('user.login');
    Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

    Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('user.logout');
});


Route::group(['namespace' => 'App\Http\Controllers\Product'], function() {
    Route::get('/home', IndexController::class)->name('product.index');
});