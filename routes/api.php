<?php

use App\Http\Controllers\Api\V1\CategoryTagBrand\BrandController;
use App\Http\Controllers\Api\V1\CategoryTagBrand\CategoryController;
use App\Http\Controllers\Api\V1\CategoryTagBrand\TagController;
use Illuminate\Support\Facades\Route;


// Category
Route::group([
    'namespace' => 'App\Http\Controllers\Api\V1\CategoryTagBrand;',
    'prefix' => '/v1'
], function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/new_category', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});


// Brands
Route::group([
    'namespace' => 'App\Http\Controllers\Api\V1\CategoryTagBrand;',
    'prefix' => '/v1'
], function () {
    Route::get('/brands', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/{brand}', [BrandController::class, 'show'])->name('brand.show');
    Route::post('/new_brand', [BrandController::class, 'store'])->name('brand.store');
    Route::delete('/brand/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
});


// Tags
Route::group([
    'namespace' => 'App\Http\Controllers\Api\V1\CategoryTagBrand;',
    'prefix' => '/v1'
], function () {
    Route::get('/tags', [TagController::class, 'index'])->name('tag.index');
    Route::get('/new_tag', [TagController::class, 'create'])->name('tag.create');
    Route::get('/tag/{tag}', [TagController::class, 'show'])->name('tag.show');
    Route::post('/new_tag', [TagController::class, 'store'])->name('tag.store');
    Route::delete('/tag/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');
});

