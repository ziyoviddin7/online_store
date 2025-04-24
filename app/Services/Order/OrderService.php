<?php

namespace App\Services\Order;

use App\Models\Order;
use App\Services\Cart\CartService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class OrderService
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }


    public function createOrder(array $orderData)
    {
        $totalQuantity = $this->cartService->getTotalQuantity();

        if ($totalQuantity === 0) {
            throw new \Exception('Корзина пуста');
        }

        return DB::transaction(function () use ($orderData, $totalQuantity) {
            // Создаем заказ
            $order = Order::create([
                'user_id' => Auth::check() ? Auth::id() : null,
                'full_name' => $orderData['full_name'],
                'email' => $orderData['email'],
                'phone' => $orderData['phone'],
                'postal_code' => $orderData['postal_code'],
                'country' => $orderData['country'],
                'region_city' => $orderData['region_city'],
                'address' => $orderData['address'],
                'total_price' => $this->cartService->getTotal(),
                'total_quantity' => $totalQuantity,
                'status' => 'pending',
                'payment_id' => '',
            ]);

            // Добавляем товары в заказ из корзины
            $items = [];
            foreach ($this->cartService->getCartItems() as $item) {
                $items[] = [
                    'order_id' => $order->id,
                    'product_id' => $item['product']->id,
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            DB::table('order_product')->insert($items);

            $userId = Auth::id();
            Cache::forget("order_list:{$userId}:list");

            return $order;
        });
    }
}
