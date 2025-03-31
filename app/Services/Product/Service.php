<?php


namespace App\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        $data['image'] = Storage::disk('public')->put('/product_images', $data['image']);

        $tag_id = $data['tag_id'];

        $product = Product::create($data);
        $product->tags()->attach($tag_id);
    }

    public function update($product, $data)
    {
        if (array_key_exists('image', $data) && !empty($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/product_images', $data['image']);
        } else {
            unset($data['image']);
        }

        $tag_id = $data['tag_id'];

        $product->update($data);
        $product->tags()->sync($tag_id);
    }
}