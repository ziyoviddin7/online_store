<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Profile\UserAvatarRequest;
use App\Http\Requests\User\Profile\UserProfileRequest;
use App\Services\User\Profile\UserProfileService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ProfileController extends Controller
{
    protected $userProfileService;

    public function __construct(UserProfileService $userProfileService)
    {
        $this->userProfileService = $userProfileService;
    }

    public function information()
    {
        $userId = Auth::id();
        $user = Cache::remember("user:{$userId}:detail", 3600, function () {
            return Auth::user();
        });
        return view('user.profile.profile-information', compact('user'));
    }

    public function edit(UserProfileRequest $userProfileRequest)
    {
        $user = Auth::user();

        $data = $userProfileRequest->validated();

        $this->userProfileService->update($user, $data);

        return redirect()->back();
    }

    public function editProfileAvatar(UserAvatarRequest $userAvatarRequest)
    {
        $user = Auth::user();

        $data = $userAvatarRequest->validated();

        $this->userProfileService->uploadImage($user, $data);

        return redirect()->back();
    }
}
