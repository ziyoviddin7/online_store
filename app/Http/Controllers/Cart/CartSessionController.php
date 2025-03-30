<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Cart\CartSession;
use App\Services\Cart\CartSessionService;
use Illuminate\Http\Request;

class CartSessionController extends Controller
{
    protected $cartSessionService;

    public function __construct(CartSessionService $cartSessionService)
    {
        $this->cartSessionService = $cartSessionService;
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        $this->cartSessionService->addToCart($product_id, $price, $quantity);

        return redirect()->back()->with('success', 'item added to session(cart)');
    }

    public function show()
    {
        $cartSession_items = $this->cartSessionService->getCartItems();
        $cartSession_total = $this->cartSessionService->getTotal();
        $cartSession_total_quantity = $this->cartSessionService->getTotalQuantity();
        return view('cart.show-cart', compact('cartSession_items', 'cartSession_total', 'cartSession_total_quantity'));
    }

    public function remove(Product $product)
    {
        $product_id = $product->id;
        $this->cartSessionService->removeFromCart($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' removed from cart");
    }

    public function decreaseQuantity(Product $product)
    {
        $product_id = $product->id;
        $this->cartSessionService->decreaseQuantityOrRemove($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' quantity decreased");
    }

    public function increaseQuantity(Product $product)
    {
        $product_id = $product->id;
        $this->cartSessionService->increaseQuantity($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' quantity increased");
    }
}
