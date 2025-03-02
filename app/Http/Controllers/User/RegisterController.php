<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterStoreRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('user.register');
    }

    public function store(RegisterStoreRequest $registerStoreRequest)
    {
        $registerStoreRequest->validated();

        $user = User::create([
            'name' => $registerStoreRequest->name,
            'email' => $registerStoreRequest->email,
            'password' => Hash::make($registerStoreRequest->password),
        ]);

        Auth::login($user);
        
        return redirect(RouteServiceProvider::HOME);
    }
}
