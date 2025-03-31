<?php


namespace App\Services\Favorites;

use App\Models\Favorites as ModelsFavorites;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FavoritesService
{
    protected function getUser(): ?User
    {
        $user = Auth::user();

        // Проверяем, что пользователь авторизован и является экземпляром App\Models\User
        if (!$user || !$user instanceof User) {
            return null;
        }

        return $user;
    }

    // public function syncSessionFavorites()
    // {
    //     $user = $this->getUser();
    //     if (!$user) {
    //         return;
    //     }

    //     $sessionFavorites  = session()->get('favorites', []);

    //     if ($sessionFavorites) {
    //         foreach ($sessionFavorites as $product_id => $item) {
    //             $isInFavorites = $user->favorites()->where('product_id', $product_id)->exists();

    //             if (!$isInFavorites) {
    //                 $user->favorites()->create([
    //                     'product_id' => $product_id,
    //                 ]);
    //             }
    //         }
    //         session()->forget('favorites');
    //     }
    // }

    public function syncSessionFavorites()
    {
        $user = $this->getUser();
        if (!$user) {
            return;
        }

        $sessionFavorites = session('favorites', []);

        if (!empty($sessionFavorites)) {
            DB::transaction(function () use ($user, $sessionFavorites) {
                // Получаем существующие избранные товары пользователя
                $existingFavorites = $user->favorites()
                    ->whereIn('product_id', array_keys($sessionFavorites))
                    ->pluck('product_id')
                    ->toArray();

                $newFavorites = [];

                foreach ($sessionFavorites as $product_id => $item) {
                    if (!in_array($product_id, $existingFavorites)) {
                        $newFavorites[] = [
                            'user_id'    => $user->id,
                            'product_id' => $product_id,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }

                // Массовая вставка новых записей
                if (!empty($newFavorites)) {
                    ModelsFavorites::insert($newFavorites);
                }

                session()->forget('favorites');
            });
        }
    }


    public function addToFavorites($product_id)
    {
        $user = $this->getUser();
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
        $user = $this->getUser();
        if (!$user) {
            return collect();
        }
        return $user->favorites()->with('product')->get()->pluck('product');
    }

    public function removeFromFavorites($product_id)
    {
        $user = $this->getUser();

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $user->favorites()->where('product_id', $product_id)->delete();

        return response()->json(['success' => true, 'message' => 'Товар удален из избранного']);
    }


    public function getTotalQuantity()
    {
        $user = $this->getUser();

        if (!$user) {
            return 0;
        }

        return $user->favorites()->count();
    }
}
