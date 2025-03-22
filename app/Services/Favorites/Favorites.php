<?php


namespace App\Services\Favorites;

use App\Models\Cart as ModelsCart;

class Favorites
{
    public function syncSessionCart()
    {
        $user = auth()->user();
        $sessionCart = session()->get('cart', []);

        if ($sessionCart) {
            $cart = ModelsCart::firstOrCreate(['user_id' => $user->id]);

            foreach ($sessionCart as $product_id => $item) {
                $isInCart = $cart->cart_items()->where('product_id', $product_id)->exists();

                if ($isInCart) {
                    $cart->cart_items()
                        ->where('product_id', $product_id)
                        ->increment('quantity', $item['quantity']);
                } else {
                    $cart->cart_items()->create([
                        'product_id' => $product_id,
                        'price' => $item['price'],
                        'quantity' => $item['quantity'],
                    ]);
                }
            }

            session()->forget('cart');
        }
    }

    public function addToCart($product_id, $price, $quantity)
    {
        $user = auth()->user();
        $cart = ModelsCart::firstOrCreate(['user_id' => $user->id]);

        $isInCart = $cart->cart_items()->where('product_id', $product_id)->exists();

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
    }

    public function getCartItems()
    {
        $user = auth()->user();
        if (!$user) {
            return collect();
        }
        $cart = ModelsCart::where('user_id', $user->id)->first();

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

        return collect();
    }

    public function removeFromCart($product_id)
    {
        $user = auth()->user();
        if (!$user) {
            return;
        }

        $cart = ModelsCart::where('user_id', $user->id)->first();

        if ($cart) {
            $cart->cart_items()->where('product_id', $product_id)->delete();
        }
    }

    public function decreaseQuantityOrRemove($product_id)
    {
        $user = auth()->user();
        if (!$user) {
            return;
        }

        $cart = ModelsCart::where('user_id', $user->id)->first();

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
    }

    public function increaseQuantity($product_id)
    {
        $user = auth()->user();
        if (!$user) {
            return;
        }

        $cart = ModelsCart::firstOrCreate(['user_id' => $user->id]);

        $isInCart = $cart->cart_items()->where('product_id', $product_id)->exists();

        if ($isInCart) {
            $cart->cart_items()
                ->where('product_id', $product_id)
                ->increment('quantity');
        } 
    }

    public function getTotalQuantity()
    {
        $user = auth()->user();
        if (!$user) {
            return 0;
        }

        $cart = ModelsCart::where('user_id', $user->id)->first();

        if ($cart) {
            return $cart->cart_items()->sum('quantity');
        }

        return 0;
    }

    public function getTotal()
    {
        $user = auth()->user();
        if (!$user) {
            return collect();
        }
        $cart = ModelsCart::where('user_id', $user->id)->first();

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
