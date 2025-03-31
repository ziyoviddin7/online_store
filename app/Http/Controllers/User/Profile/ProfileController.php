<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginStoreRequest;
use App\Providers\RouteServiceProvider;
use App\Services\Cart\CartService;
use App\Services\Favorites\FavoritesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function information()
    {
        $user = Auth::user();
        return view('user.profile.profile-information');
    }

}
