<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Cart\CartService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function checkout()
    {
        $cart_items = $this->cartService->getCartItems();
        $cart_total = $this->cartService->getTotal();
        $cart_total_quantity = $this->cartService->getTotalQuantity();
        return view('order.order-checkout', compact('cart_items', 'cart_total', 'cart_total_quantity'));
    }
}
