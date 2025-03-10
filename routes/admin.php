<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;



Route::middleware("guest:admin")->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
});


Route::middleware("auth:admin")->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/product_list', [ProductController::class, 'index'])->name('product_list');
    Route::resource('category', CategoryController::class);
});
