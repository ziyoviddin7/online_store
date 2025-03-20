<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Cart\Service;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Service $service)
    {
        $this->cart = $service;
    }


    // Guest cart: Store cart data in session for non-authenticated users
    public function addToSession(Request $request)
    {
        $product_id = $request->input('product_id');
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        $this->cart->addToSession($product_id, $price, $quantity);

        return redirect()->back()->with('success', 'item added to session(cart)');
    }

    public function showSessionCart() {
        $items = $this->cart->getItemsSession();
        //$total = $cart->getTotal();
        return view('product.shop', compact('items'));
    }

    public function removeFromCartSession(Product $product)
    {
        $product_id = $product->id;
        $this->cart->removeFromCartSession($product_id);
        return redirect()->back()->with('success', 'item added to session(cart)');
    }

    public function removeOneProductCartSession(Product $product)
    {
        $product_id = $product->id;
        $this->cart->removeOneProductCartSession($product_id);
        return redirect()->back()->with('success', 'item added to session(cart)');
    }
    
}
