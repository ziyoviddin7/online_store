<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Profile\UserAvatarRequest;
use App\Http\Requests\User\Profile\UserProfileRequest;

use App\Http\Resources\V1\User\UserResource;

use App\Services\User\Profile\UserProfileService;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

use App\Models\User;


class UserController extends Controller
{
    protected $userProfileService;

    public function __construct(UserProfileService $userProfileService)
    {
        $this->userProfileService = $userProfileService;
    }

    public function all_users()
    {
        $users = Cache::remember('users:all', 600, function() {
            return User::all();
        });

        return UserResource::collection($users);
    }

    public function show(User $user)
    {
        $cachedUser = Cache::remember("user:{$user->id}:detail", 3600, function () use ($user) {
            return $user;
        });
        return new UserResource($cachedUser);
    }

    // public function store(RegisterStoreRequest $registerStoreRequest)
    // {
    //     $registerStoreRequest->validated();

    //     $user = User::create([
    //         'name' => $registerStoreRequest->name,
    //         'email' => $registerStoreRequest->email,
    //         'password' => Hash::make($registerStoreRequest->password),
    //     ]);
    //     //event(new Registered($user));

    //     Auth::login($user);

    //     $cart = new CartService();
    //     $favorites = new FavoritesService();

    //     $cart->syncSessionCart();
    //     $favorites->syncSessionFavorites();

    //     return redirect(RouteServiceProvider::HOME);
    // }

    // public function edit(UserProfileRequest $userProfileRequest)
    // {
    //     $user = Auth::user();

    //     $data = $userProfileRequest->validated();

    //     $this->userProfileService->update($user, $data);

    //     return redirect()->back();
    // }

    // public function editProfileAvatar(UserAvatarRequest $userAvatarRequest)
    // {
    //     $user = Auth::user();

    //     $data = $userAvatarRequest->validated();

    //     $this->userProfileService->uploadImage($user, $data);

    //     return redirect()->back();
    // }
}
