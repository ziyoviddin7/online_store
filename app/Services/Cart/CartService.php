<?php


namespace App\Services\Cart;

use Illuminate\Support\Facades\Auth;

use App\Models\Cart as ModelsCart;

class CartService
{
    public function syncSessionCart()
    {
        $userId = Auth::id();
        if (!$userId) {
            return;
        }

        $sessionCart = session()->get('cart', []);

        if ($sessionCart) {
            $cart = ModelsCart::firstOrCreate(['user_id' => $userId]);

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
        $userId = Auth::id();
        
        if (!$userId) {
            return;
        }

        $cart = ModelsCart::firstOrCreate(['user_id' => $userId]);

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
        $userId = Auth::id();


        if (!$userId) {
            return collect();
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

        return collect();
    }

    public function removeFromCart($product_id)
    {
        $userId = Auth::id();

        if (!$userId) {
            return;
        }

        $cart = ModelsCart::where('user_id', $userId)->first();

        if ($cart) {
            $cart->cart_items()->where('product_id', $product_id)->delete();
        }
    }

    public function decreaseQuantityOrRemove($product_id)
    {
        $userId = Auth::id();

        if (!$userId) {
            return;
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
    }

    public function increaseQuantity($product_id)
    {
        $userId = Auth::id();

        if (!$userId) {
            return;
        }

        $cart = ModelsCart::firstOrCreate(['user_id' => $userId]);

        $isInCart = $cart->cart_items()->where('product_id', $product_id)->exists();

        if ($isInCart) {
            $cart->cart_items()
                ->where('product_id', $product_id)
                ->increment('quantity');
        } 
    }

    public function getTotalQuantity()
    {
        $userId = Auth::id();

        if (!$userId) {
            return 0;
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
            return collect();
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
