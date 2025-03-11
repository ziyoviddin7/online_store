<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Product\CreateController;
use App\Http\Controllers\Admin\Product\IndexController;
use App\Http\Controllers\Admin\Product\StoreController;
use Illuminate\Support\Facades\Route;



Route::middleware('guest:admin')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
});


Route::middleware('auth:admin')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/product_list', IndexController::class)->name('product_list');

    Route::get('/product_create', CreateController::class)->name('product.create');
    Route::post('/product_create', StoreController::class)->name('product.store');


    Route::resource('category', CategoryController::class);
});
