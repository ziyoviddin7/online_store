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
}
