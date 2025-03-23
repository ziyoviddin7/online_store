<?php


namespace App\Services\Favorites;

use App\Models\Favorites as ModelsFavorites;

class Favorites
{
    public function syncSessionFavorites()
    {
        $user = auth()->user();
        $sessionFavorites  = session()->get('favorites', []);

        if ($sessionFavorites) {
            foreach ($sessionFavorites as $product_id => $item) {
                $isInFavorites = $user->favorites()->where('product_id', $product_id)->exists();

                if (!$isInFavorites) {
                    $user->favorites()->create([
                        'product_id' => $product_id,
                    ]);
                }
            }
            session()->forget('favorites');
        }
    }

    public function addToFavorites($product_id)
    {
        $user = auth()->user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $favorite = ModelsFavorites::firstOrCreate([
            'user_id' => $user->id,
            'product_id' => $product_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => $favorite->wasRecentlyCreated ? 'Товар добавлен в избранное' : 'Товар уже в избранном',
        ]);
    }

    public function getFavoritesItems()
    {
        $user = auth()->user();
        if (!$user) {
            return collect();
        }
        return $user->favorites()->with('product')->get()->pluck('product');
    }

    public function removeFromFavorites($product_id)
    {
        $user = auth()->user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $user->favorites()->where('product_id', $product_id)->delete();

        return response()->json(['success' => true, 'message' => 'Товар удален из избранного']);
    }


    public function getTotalQuantity()
    {
        $user = auth()->user();
        if (!$user) {
            return 0;
        }

        return $user->favorites()->count();
    }
}
