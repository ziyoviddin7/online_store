<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginStoreRequest;
use App\Providers\RouteServiceProvider;
use App\Services\Cart\Cart;
use App\Services\Favorites\Favorites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.auth.login');
    }

    public function store(LoginStoreRequest $loginStoreRequest)
    {
        $credentials = $loginStoreRequest->validated();

        if (Auth::attempt($credentials, $loginStoreRequest->boolean('remember'))) {
            $cart = new Cart();
            $favorites = new Favorites();

            $cart->syncSessionCart();
            $favorites->syncSessionFavorites();

            $loginStoreRequest->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::HOME);
        }
        return back()
            ->withInput()
            ->withErrors([
                'email' => 'These data do not match our records.'
            ]);
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
