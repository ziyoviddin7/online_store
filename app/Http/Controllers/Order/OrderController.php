<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderStoreRequest;
use App\Services\Cart\CartService;
use App\Services\Order\YooKassaService;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $yooKassaService;
    protected $cartService;

    public function __construct(YooKassaService $yooKassaService, CartService $cartService)
    {
        $this->yooKassaService = $yooKassaService;
        $this->cartService = $cartService;
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

    public function handleWebhook(Request $request)
    {
        return $this->yooKassaService->webhookYooKassa($request);
    }

    public function callback($order_id)
    {
        return $this->yooKassaService->callback($order_id);
    }

}
