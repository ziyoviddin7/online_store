<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Profile\UserAvatarRequest;
use App\Http\Requests\User\Profile\UserProfileRequest;
use App\Services\User\Profile\UserProfileService;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    protected $userProfileService;

    public function __construct(UserProfileService $userProfileService)
    {
        $this->userProfileService = $userProfileService;
    }

    public function information()
    {
        $user = Auth::user();
        return view('user.profile.profile-information');
    }

    public function edit(UserProfileRequest $userProfileRequest, )
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
