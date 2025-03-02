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
    Route::get('/login', [LoginController::class, 'create'])->name('user.login');
    Route::get('/register', [RegisterController::class, 'create'])->name('user.register');
});


Route::group(['namespace' => 'App\Http\Controllers\Product'], function() {
    Route::get('/home', IndexController::class)->name('product.index');
});