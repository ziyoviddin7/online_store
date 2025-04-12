<?php

namespace App\Http\Resources\V1\Product;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'image' => $this->image,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::parse($this->updated_at)->format('Y-m-d H:i:s'),
            'deleted_at' => $this->deleted_at ? Carbon::parse($this->deleted_at)->format('Y-m-d H:i:s'): null,
        ];
    }
}
