<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        $this->cart->addToCart($product_id, $price, $quantity);

        return redirect()->back()->with('success', 'item added to session(cart)');
    }

    public function show()
    {
        $cart_items = $this->cart->getCartItems();
        $cart_total = $this->cart->getTotal();
        $cart_total_quantity = $this->cart->getTotalQuantity();
        return view('cart.show-cart', compact('cart_items', 'cart_total', 'cart_total_quantity'));
    }

    public function remove(Product $product)
    {
        $product_id = $product->id;
        $this->cart->removeFromCart($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' removed from cart");
    }

    public function decreaseQuantity(Product $product)
    {
        $product_id = $product->id;
        $this->cart->decreaseQuantityOrRemove($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' quantity decreased");
    }

    public function increaseQuantity(Product $product)
    {
        $product_id = $product->id;
        $this->cart->increaseQuantity($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' quantity increased");
    }
}
