<?php


namespace App\Services\Cart;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Cart as ModelsCart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Cache;

class CartService
{
    public function syncSessionCart()
    {
        $userId = Auth::id();
        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $sessionCart = session('cart', []);

        if (!empty($sessionCart)) {
            DB::transaction(function () use ($userId, $sessionCart) {
                $cart = ModelsCart::firstOrCreate(['user_id' => $userId]);

                // Достаем все товары из бд, у которых ID товара совпадает с тем, что есть в сессии
                $existingCartItems = $cart->cart_items()
                    ->whereIn('product_id', array_keys($sessionCart))
                    ->get()
                    ->keyBy('product_id');

                $newItems = [];

                foreach ($sessionCart as $product_id => $item) {
                    if (isset($existingCartItems[$product_id])) {
                        // Обновление количества, если товар уже в корзине
                        $existingCartItems[$product_id]->increment('quantity', $item['quantity']);
                    } else {
                        // Подготовка данных для массовой вставки
                        $newItems[] = [
                            'cart_id'    => $cart->id,
                            'product_id' => $product_id,
                            'quantity'   => $item['quantity'],
                            'price'      => $item['price'],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }

                // Массовая вставка новых записей
                if (!empty($newItems)) {
                    CartItem::insert($newItems);
                }

                session()->forget('cart');
                Cache::forget("cart_items_show:{$cart->id}:all");
            });
        }
    }


    public function addToCart($product_id, $price, $quantity)
    {
        $userId = Auth::id();

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $cart = ModelsCart::firstOrCreate(['user_id' => $userId]);

        $isInCart = $cart->cart_items()->where('product_id', $product_id)->first();

        if ($isInCart) {
            $cart->cart_items()
                ->where('product_id', $product_id)
                ->increment('quantity', $quantity);
        } else {
            $cart->cart_items()->create([
                'product_id' => $product_id,
                'price' => $price,
                'quantity' => $quantity,
            ]);
        }
        Cache::forget("cart_items_show:{$cart->id}:all");

        return response()->json(['success' => true, 'message' => 'Товар добавлен в корзину']);
    }

    public function getCartItems()
    {
        $userId = Auth::id();

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $cart = ModelsCart::where('user_id', $userId)->first();

        if ($cart) {
            $cartItems = $cart->cart_items()->with('product')->get();

            return $cartItems->map(function ($item) {
                return [
                    'product' => $item->product,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                    'total' => $item->price * $item->quantity,
                ];
            });
        }
        return collect([]);
    }

    public function removeFromCart($product_id)
    {
        $userId = Auth::id();

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $cart = ModelsCart::where('user_id', $userId)->first();

        if ($cart) {
            $cart->cart_items()->where('product_id', $product_id)->delete();
        }
        Cache::forget("cart_items_show:{$cart->id}:all");
    }

    public function decreaseQuantityOrRemove($product_id)
    {
        $userId = Auth::id();

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $cart = ModelsCart::where('user_id', $userId)->first();

        if ($cart) {
            $cartItem = $cart->cart_items()->where('product_id', $product_id)->first();

            if ($cartItem) {
                $cartItem->quantity -= 1;

                if ($cartItem->quantity <= 0) {
                    $cartItem->delete();
                } else {
                    $cartItem->save();
                }
            }
        }
        Cache::forget("cart_items_show:{$cart->id}:all");
    }

    public function increaseQuantity($product_id)
    {
        $userId = Auth::id();

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $cart = ModelsCart::where('user_id', $userId)->first();

        if ($cart) {
            $cart->cart_items()
                ->where('product_id', $product_id)
                ->increment('quantity');
        }
        Cache::forget("cart_items_show:{$cart->id}:all");
    }

    public function getTotalQuantity()
    {
        $userId = Auth::id();

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }

        $cart = ModelsCart::where('user_id', $userId)->first();

        if ($cart) {
            return $cart->cart_items()->sum('quantity');
        }
        return 0;
    }

    public function getTotal()
    {
        $userId = Auth::id();

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Пользователь не авторизован'], 401);
        }
        $cart = ModelsCart::where('user_id', $userId)->first();

        if ($cart) {
            $cartItems = $cart->cart_items;

            $total = $cartItems->sum(function ($item) {
                return $item->price * $item->quantity;
            });

            return $total;
        }
        return 0;
    }
}
