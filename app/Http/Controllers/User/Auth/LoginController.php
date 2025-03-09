<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginStoreRequest;
use App\Providers\RouteServiceProvider;
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
            $loginStoreRequest->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::HOME);
        }
        return back()
            ->withInput()
            ->withErrors([
                'email' => 'Эти данные не совпадают с нашими записями.'
            ]);
    }
}
