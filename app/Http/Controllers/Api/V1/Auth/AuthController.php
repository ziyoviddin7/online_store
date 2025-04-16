<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\ApiLoginStoreRequest;
use App\Http\Requests\Api\V1\Auth\ApiRegisterStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(ApiRegisterStoreRequest $request)
    {
        return User::create($request->all());
    }

    public function login(ApiLoginStoreRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json([
                'message' => 'Wrong email or password'
            ], 401);
        }

        $user = Auth::user();
        $user->tokens()->delete();

        return response()->json([
            'user' => $user,
            'token' => $user->createToken("Token of user: {$user->name}")->plainTextToken
        ]);
    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Token removed',
        ]);
    }
}
