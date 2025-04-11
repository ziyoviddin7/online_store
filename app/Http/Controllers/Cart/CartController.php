<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Cart\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function add(Request $request)
    {
        $product_id = $request->input('product_id');
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        $this->cartService->addToCart($product_id, $price, $quantity);

        return redirect()->back()->with('success', 'item added to session(cart)');
    }

    public function show()
    {
        $user = Auth::user();
        $cart_items = Cache::remember("cart_items_show:{$user->cart->id}:all", 600, function() {
            return $this->cartService->getCartItems();
        });
        $cart_total = $this->cartService->getTotal();
        $cart_total_quantity = $this->cartService->getTotalQuantity();
        return view('cart.show-cart', compact('cart_items', 'cart_total', 'cart_total_quantity'));
    }

    public function remove(Product $product)
    {
        $product_id = $product->id;
        $this->cartService->removeFromCart($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' removed from cart");
    }

    public function decreaseQuantity(Product $product)
    {
        $product_id = $product->id;
        $this->cartService->decreaseQuantityOrRemove($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' quantity decreased");
    }

    public function increaseQuantity(Product $product)
    {
        $product_id = $product->id;
        $this->cartService->increaseQuantity($product_id);
        return redirect()->back()->with('success', "Item '{$product->name}' quantity increased");
    }
}
