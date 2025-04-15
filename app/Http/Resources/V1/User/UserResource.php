<?php

namespace App\Http\Resources\V1\User;

use App\Http\Resources\V1\Product\ProductResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'fullname' => $this->fullname,
            'date_of_birth' => $this->date_of_birth ? Carbon::parse($this->date_of_birth)->format('Y-m-d') : null,
            'phone' => $this->phone,
            'image' => $this->image ? asset('storage/'.$this->image) : null,
            'country' => $this->country,
            'city' => $this->city,
            'slug' => $this->slug,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::parse($this->updated_at)->format('Y-m-d H:i:s'),
        ];
    }
}
