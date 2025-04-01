<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderStoreRequest;
use App\Services\Cart\CartService;
use App\Services\Order\OrderService;
use App\Services\Order\YooKassaService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $yooKassaService;
    protected $cartService;
    protected $orderService;

    public function __construct(YooKassaService $yooKassaService, OrderService $orderService, CartService $cartService)
    {
        $this->yooKassaService = $yooKassaService;
        $this->cartService = $cartService;
        $this->orderService = $orderService;
    }

    public function checkout()
    {
        $cart_items = $this->cartService->getCartItems();
        $cart_total = $this->cartService->getTotal();
        $cart_total_quantity = $this->cartService->getTotalQuantity();
        return view('order.order-checkout', compact('cart_items', 'cart_total', 'cart_total_quantity'));
    }

    public function store(OrderStoreRequest $orderStoreRequest)
    {
        $data = $orderStoreRequest->validated();

        return $this->yooKassaService->createPayment($data);
    }

    public function callback()
    {
        return view('order.order-callback');
    }
}
