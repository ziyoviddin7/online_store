<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function index()
    {
        return view('user.auth.login');
    }
}
