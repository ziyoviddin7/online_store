<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Cart\CartSession;
use Illuminate\Http\Request;

class CartSessionController extends Controller
{
    protected $cartSession;

    public function __construct(CartSession $cartSession)
    {
        $this->cartSession = $cartSession;
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        $this->cartSession->addToCart($product_id, $price, $quantity);

        return redirect()->back()->with('success', 'item added to session(cart)');
    }

    public function show()
    {
        $items = $this->cartSession->getCartItems();
        return view('product.shop', compact('items', 'total'));
    }

    public function remove(Product $product)
    {
        $product_id = $product->id;
        $this->cartSession->removeFromCart($product_id);
        return redirect()->back()->with('success', 'item added to session(cart)');
    }

    public function decreaseQuantity(Product $product)
    {
        $product_id = $product->id;
        $this->cartSession->decreaseQuantityOrRemove($product_id);
        return redirect()->back()->with('success', 'item added to session(cart)');
    }
}
