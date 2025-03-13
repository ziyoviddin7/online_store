<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\CategoryTagBrand\BrandController;
use App\Http\Controllers\Admin\CategoryTagBrand\CategoryController;
use App\Http\Controllers\Admin\CategoryTagBrand\TagController;
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

    Route::get('/products', IndexController::class)->name('product_list');
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/tags', [TagController::class, 'index'])->name('tag.index');
    Route::get('/brands', [BrandController::class, 'index'])->name('brand.index');


    Route::get('/product_create', CreateController::class)->name('product.create');
    Route::post('/product_create', StoreController::class)->name('product.store');

    Route::get('/new_category', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/new_category', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/new_tag', [TagController::class, 'create'])->name('tag.create');
    Route::get('/tag/{tag}', [TagController::class, 'show'])->name('tag.show');
    Route::post('/new_tag', [TagController::class, 'store'])->name('tag.store');
    Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');


    Route::get('/new_brand', [BrandController::class, 'create'])->name('brand.create');
    Route::get('/brand/{brand}', [BrandController::class, 'show'])->name('brand.show');
    Route::post('/new_brand', [BrandController::class, 'store'])->name('brand.store');
    Route::delete('/brands/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');


});
