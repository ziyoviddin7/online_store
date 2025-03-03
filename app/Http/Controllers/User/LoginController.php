<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginStoreRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('user.login');
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

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('product.index');
    }
}
