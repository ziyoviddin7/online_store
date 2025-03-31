<?php


namespace App\Services\User\Profile;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserProfileService
{
    public function update($user, $data)
    {
        $user->update($data);
    }

    public function uploadImage($user, $data)
    {
        if (array_key_exists('image', $data) && !empty($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/user_avatar_images', $data['image']);
        } else {
            unset($data['image']);
        }
        $user->update($data);
    }
}