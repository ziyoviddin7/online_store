<?php


namespace App\Services\Cart;

use App\Models\Product;

class CartSessionService
{
    protected $sessionKey = 'cart';
    public function addToCart($product_id, $price, $quantity)
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

    public function getCartItems()
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

    public function removeFromCart($product_id)
    {
        $cart = session()->get($this->sessionKey, []);

        if (isset($cart[$product_id])) {
            unset($cart[$product_id]);
            session()->put($this->sessionKey, $cart);
        }
    }

    public function decreaseQuantityOrRemove($product_id)
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

    public function increaseQuantity($product_id)
    {
        $cart = session()->get($this->sessionKey, []);

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] += 1;

            session()->put($this->sessionKey, $cart);
        }
    }

    public function getTotalQuantity()
    {
        $cart = session()->get($this->sessionKey, []);

        $totalQuantity = 0;

        foreach ($cart as $product_id => $item) {
            $totalQuantity += $item['quantity'];
        }

        return $totalQuantity;
    }

    public function getTotal()
    {
        $cart = session()->get($this->sessionKey, []);

        $total = 0;

        foreach ($cart as $product_id => $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return $total;
    }
}
