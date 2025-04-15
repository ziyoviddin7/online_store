<?php

use App\Http\Controllers\Api\V1\CategoryTagBrand\BrandController;
use App\Http\Controllers\Api\V1\CategoryTagBrand\CategoryController;
use App\Http\Controllers\Api\V1\CategoryTagBrand\TagController;
use App\Http\Controllers\Api\V1\User\UserController;


use Illuminate\Support\Facades\Route;


// User
Route::prefix('/v1')->group(function () {
    Route::get('/users', [UserController::class, 'all_users'])->name('users.all');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
    // Route::patch('/user/{user}', [UserController::class, 'edit'])->name('user.profile.edit');
    // Route::patch('/information/avatar/edit', [UserController::class, 'editProfileAvatar'])->name('user.profile.avatar');
});


// Category
Route::prefix('/v1')->group(function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/new_category', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});


// Brands
Route::prefix('/v1')->group(function () {
    Route::get('/brands', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/brand/{brand}', [BrandController::class, 'show'])->name('brand.show');
    Route::post('/new_brand', [BrandController::class, 'store'])->name('brand.store');
    Route::delete('/brand/{brand}', [BrandController::class, 'destroy'])->name('brand.destroy');
});


// Tags
Route::prefix('/v1')->group(function () {
    Route::get('/tags', [TagController::class, 'index'])->name('tag.index');
    Route::get('/new_tag', [TagController::class, 'create'])->name('tag.create');
    Route::get('/tag/{tag}', [TagController::class, 'show'])->name('tag.show');
    Route::post('/new_tag', [TagController::class, 'store'])->name('tag.store');
    Route::delete('/tag/{tag}', [TagController::class, 'destroy'])->name('tag.destroy');
});

