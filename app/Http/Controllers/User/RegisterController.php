<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function create()
    {
        return view('user.register');
    }
}