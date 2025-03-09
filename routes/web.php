<?php

use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
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

Route::get('/', function () {
    return view('dashboard');
});

// User Auth
Route::group(['namespace' => 'App\Http\Controllers\User\Auth'], function() {
    Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('user.register');
    Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('user.register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('user.login');
});
