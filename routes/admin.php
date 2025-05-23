<?php

use App\Http\Controllers\Admin\Auth\AuthController;

use App\Http\Controllers\Admin\CategoryTagBrand\BrandController;
use App\Http\Controllers\Admin\CategoryTagBrand\CategoryController;
use App\Http\Controllers\Admin\CategoryTagBrand\TagController;

use App\Http\Controllers\Admin\Product\CreateController;
use App\Http\Controllers\Admin\Product\DestroyController;
use App\Http\Controllers\Admin\Product\EditController;
use App\Http\Controllers\Admin\Product\IndexController;
use App\Http\Controllers\Admin\Product\ShowController;
use App\Http\Controllers\Admin\Product\StoreController;
use App\Http\Controllers\Admin\Product\UpdateController;

use Illuminate\Support\Facades\Route;


Route::middleware('guest:admin')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
});


Route::middleware('auth:admin')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/products', IndexController::class)->name('product_list');
    Route::get('/product_create', CreateController::class)->name('product.create');
    Route::get('/product/{product}', ShowController::class)->name('product.show');
    Route::get('/product/{product}/edit', EditController::class)->name('product.edit');
    Route::post('/product_create', StoreController::class)->name('product.store');
    Route::patch('/product/{product}', UpdateController::class)->name('product.update');
    Route::delete('/product/{product}', DestroyController::class)->name('product.delete');

    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/new_category', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/new_category', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/tags', [TagController::class, 'index'])->name('tag.index');
    Route::get('/new_tag', [TagController::class, 'create'])->name('tag.create');
    Route::get('/tag/{tag}', [TagController::class, 'show'])->name('tag.show');
    Route::post('/new_tag', [TagController::class, 'store'])->name('tag.store');
    Route::delete('/tag/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');

    Route::get('/brands', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/new_brand', [BrandController::class, 'create'])->name('brand.create');
    Route::get('/brand/{brand}', [BrandController::class, 'show'])->name('brand.show');
    Route::post('/new_brand', [BrandController::class, 'store'])->name('brand.store');
    Route::delete('/brand/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
});
