<?php


namespace App\Services\Cart;

use App\Models\Product;

class Service
{
    protected $sessionKey = 'cart';
    // Guest cart: Store cart data in session for non-authenticated users
    public function addToSession($product_id, $price, $quantity)
    {
        $cart = session()->get($this->sessionKey, []);

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] += $quantity;
        } else {
            $cart[$product_id] = [
                'quantity' => $quantity,
                'price' => $price,
            ];
        }


        session()->put($this->sessionKey, $cart);
    }

    public function getItemsSession()
    {
        $cart = session()->get($this->sessionKey, []);

        $productIds = array_keys($cart);

        $products = Product::whereIn('id', $productIds)->get();

        return $products->map(function ($product) use ($cart) {
            $cartItem = $cart[$product->id];

            return [
                'product' => $product,
                'quantity' => $cartItem['quantity'],
                'price' => $cartItem['price'],
                'total' => $cartItem['quantity'] * $cartItem['price'],
            ];
        });
    }

    public function removeFromCartSession($product_id)
    {
        $cart = session()->get($this->sessionKey, []);

        if (isset($cart[$product_id])) {
            unset($cart[$product_id]);
            session()->put($this->sessionKey, $cart);
        }

    }

    public function removeOneProductCartSession($product_id)
    {
        $cart = session()->get($this->sessionKey, []);

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] -= 1;
    
            if ($cart[$product_id]['quantity'] <= 0) {
                unset($cart[$product_id]);
            }
    
            session()->put($this->sessionKey, $cart);
        }

    }


    // Database-based cart storage for authenticated users
}
