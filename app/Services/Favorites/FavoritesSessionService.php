<?php


namespace App\Services\Favorites;

use App\Models\Product;

class FavoritesSessionService
{
    protected $sessionKey = 'favorites';
    public function addToFavorites($product_id)
    {
        $favorites = session()->get($this->sessionKey, []);

        if (!isset($favorites[$product_id]))
        {
            $favorites[$product_id] = true;
        }
        session()->put($this->sessionKey, $favorites);
    }

    public function getFavoritesItems()
    {
        $favorites = session()->get($this->sessionKey, []);

        $productIds = array_keys($favorites);

        $products = Product::whereIn('id', $productIds)->get();

        return $products->map(function ($product) use ($favorites) {
            $favoritesItem = $favorites[$product->id];

            return [
                'product' => $product,
            ];
        });
    }

    public function removeFromFavorites($product_id)
    {
        $favorites = session()->get($this->sessionKey, []);

        if (isset($favorites[$product_id])) {
            unset($favorites[$product_id]);
            session()->put($this->sessionKey, $favorites);
        }
    }

    public function getTotalQuantity()
    {
        $favorites = session()->get($this->sessionKey, []);

        $totalQuantity = 0;

        foreach ($favorites as $product_id => $item) {
            $totalQuantity += 1;
        }

        return $totalQuantity;
    }
}
