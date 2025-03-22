<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Cart\CartSession;
use Illuminate\Http\Request;

class FavoritesSessionController extends Controller
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
        $cartSession_items = $this->cartSession->getCartItems();
        $cartSession_total = $this->cartSession->getTotal();
        $cartSession_total_quantity = $this->cartSession->getTotalQuantity();
        return view('cart.show-cart', compact('cartSession_items', 'cartSession_total', 'cartSession_total_quantity'));
    }

    public function remove(Product $product)
    {
        $product_id = $product->id;
        $this->cartSession->removeFromCart($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' removed from cart");
    }

    public function decreaseQuantity(Product $product)
    {
        $product_id = $product->id;
        $this->cartSession->decreaseQuantityOrRemove($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' quantity decreased");
    }

    public function increaseQuantity(Product $product)
    {
        $product_id = $product->id;
        $this->cartSession->increaseQuantity($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' quantity increased");
    }
}
