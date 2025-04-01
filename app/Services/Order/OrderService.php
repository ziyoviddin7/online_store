<?php

namespace App\Services\Order;

use App\Models\Order;
use App\Services\Cart\CartService;
use Illuminate\Support\Facades\DB;

class OrderService
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }


    public function create(array $orderData)
    {
        $totalQuantity = $this->cartService->getTotalQuantity();

        if ($totalQuantity === 0) {
            throw new \Exception('Корзина пуста');
        }

        return DB::transaction(function () use ($orderData, $totalQuantity) {
            // Создаем заказ
            $order = Order::create([
                'user_id' => auth()->check() ? auth()->id() : null,
                'fullname' => $orderData['fullname'],
                'email' => $orderData['email'],
                'phone' => $orderData['phone'],
                'postal_code' => $orderData['postal_code'],
                'country' => $orderData['country'],
                'city' => $orderData['city'],
                'address' => $orderData['address'],
                'total_price' => $this->cartService->getTotal(),
                'total_quantity' => $totalQuantity,
                'status' => 'pending',
                'payment_id' => '',
            ]);

            // Добавляем товары в заказ
            foreach ($this->cartService->getCartItems() as $item) {
                $order->products()->attach($item['product']->id, [
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);
            }

            return $order;
        });
    }
}
