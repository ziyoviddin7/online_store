<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Requests\User\Auth\RegisterStoreRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function create()
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
        
        return redirect(RouteServiceProvider::HOME);
    }
}
