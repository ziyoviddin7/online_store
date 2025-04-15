<?php

use App\Http\Controllers\Api\V1\CategoryTagBrand\CategoryController;
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

