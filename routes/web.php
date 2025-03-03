<?php

use App\Http\Controllers\Product\IndexController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// User Auth
Route::group(['namespace' => 'App\Http\Controllers\User'], function() {
    Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('user.register');
    Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

    Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('user.login');
    Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

    Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('user.logout');
});


Route::group(['namespace' => 'App\Http\Controllers\Product'], function() {
    Route::get('/home', IndexController::class)->middleware('auth', 'verified')->name('product.index');
});


// Email Verification
Route::get('/email/verify', function() {
    return view('user.verify-email'); 
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->intended(RouteServiceProvider::HOME);
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Ссылка на верификацию отправлена!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');