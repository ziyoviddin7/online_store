<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Requests\User\Auth\RegisterStoreRequest;
use App\Models\User;
use App\Services\Cart\CartService;
use App\Services\Favorites\FavoritesService;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function index()
    {
        return view('user.auth.register');
    }

    public function store(RegisterStoreRequest $registerStoreRequest)
    {
        $registerStoreRequest->validated();

        $user = User::create([
            'name' => $registerStoreRequest->name,
            'email' => $registerStoreRequest->email,
            'password' => Hash::make($registerStoreRequest->password),
        ]);
        //event(new Registered($user));

        Auth::login($user);

        $cart = new CartService();
        $favorites = new FavoritesService();

        $cart->syncSessionCart();
        $favorites->syncSessionFavorites();

        return redirect(RouteServiceProvider::HOME);
    }
}
