<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('user.auth.forgot-password');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|string|email',
        // ]);

        // $status = Password::sendResetLink(
        //     $request->only('email')
        // );

        // if ($status === Password::RESET_LINK_SENT) 
        // {
        //     return back()->with('status', trans($status));
        // }

        // return back()->withInput($request->only('email'))
        //              ->withErrors(['email' => trans($status)]);

        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
}
