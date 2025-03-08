<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login_process', [AuthController::class, 'login'])->name('login_process');

Route::get('product_list', [ProductController::class, 'index'])->name('product_list');


Route::middleware("auth:admin")->group(function () {    Route::resource('category', CategoryController::class);
});
