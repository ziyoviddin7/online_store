<?php

namespace App\Services\Order;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use YooKassa\Client;

class YooKassaService
{
    protected $client;
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->client = new Client();
        $this->client->setAuth(
            config('services.yookassa.shop_id'),
            config('services.yookassa.secret_key')
        );

        $this->orderService = $orderService;
    }

    public function createPayment($orderData)
    {
        return DB::transaction(function () use ($orderData) {
            try {
                // Создаем заказ через OrderService
                $createdOrder = $this->orderService->create($orderData);

                // Создаем платеж в YooKassa
                $payment = $this->client->createPayment(
                    array(
                        'amount' => array(
                            'value' => $createdOrder->total_price,
                            'currency' => 'RUB',
                        ),
                        'confirmation' => array(
                            'type' => 'redirect',
                            'return_url' => route('order.payment.callback', $createdOrder->id),
                        ),
                        'metadata' => [
                            'order_id' => $createdOrder->id,
                        ],
                        'capture' => true,
                        'description' => 'Заказ №' . $createdOrder->id,
                    ),
                    uniqid('', true)
                );

                $createdOrder->update(['payment_id' => $payment->getId()]);

                return redirect($payment->getConfirmation()->getConfirmationUrl());
            } catch (\Exception $e) {
                Log::error('YooKassa payment error: ' . $e->getMessage());
                return back()->withError('Ошибка при создании платежа');
            }
        });
    }
}