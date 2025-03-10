<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (auth('admin')->attempt($data)) {
            return redirect(route('admin.product_list'));
        }
        return redirect(route('admin.login'))
            ->withErrors(['email' => 'These data do not match our records.']);
    }

    public function logout()
    {
        auth('admin')->logout();
        return redirect(route('admin.login'));
    }
}
