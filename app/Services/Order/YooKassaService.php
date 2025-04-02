<?php

namespace App\Services\Order;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use YooKassa\Model\Notification\NotificationFactory;
use YooKassa\Model\Notification\NotificationEventType;

use YooKassa\Client;

class YooKassaService
{
    protected $client;
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;

        $this->client = new Client();
        $this->client->setAuth(env('YOOKASSA_SHOP_ID'), env('YOOKASSA_SECRET_KEY'));
    }

    public function createPayment($orderData)
    {
        try {
            return DB::transaction(function () use ($orderData) {
                // Создаем заказ через OrderService
                $createdOrder = $this->orderService->createOrder($orderData);

                // Создаем платеж в YooKassa
                $payment = $this->client->createPayment(
                    array(
                        'amount' => array(
                            'value' => $createdOrder->total_price,
                            'currency' => 'RUB',
                        ),
                        'confirmation' => array(
                            'type' => 'redirect',
                            'return_url' => route('order.callback', $createdOrder->id),
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
            });
        } catch (\Exception $e) {
            Log::error('YooKassa payment error: ' . $e->getMessage());
            return back()->withError('Ошибка при создании платежа');
        }
    }

    public function webhookYooKassa($request)
    {
        try {
            $source = $request->getContent();
            $data = json_decode($source, true);

            $factory = new NotificationFactory();
            $notificationObject = $factory->factory($data);
            $responseObject = $notificationObject->getObject();

            // response from Webhook
            $response_payment_id = $responseObject->getId();
            $response_payment_status = $responseObject->getStatus();

            // Order
            $order = Order::where('payment_id', $response_payment_id)->first();

            if (!$order) {
                return response()->json(['error' => 'Order not found'], 404);
            }
            // a request to Yookassa to get the payment status
            $paymentInfo = $this->client->getPaymentInfo($order->payment_id);
            $paymentStatus = $paymentInfo->getStatus();

            if ($response_payment_status !== $paymentStatus) {
                return response()->json(['error' => 'Payment status from webhook does not match YooKassa'], 400);
            }
            
            switch ($notificationObject->getEvent()) {
                case NotificationEventType::PAYMENT_SUCCEEDED:
                    $order->update(['status' => 'paid']);
                    Cart::where('user_id', $order->user_id)->delete();
                    break;
                case NotificationEventType::PAYMENT_CANCELED:
                    $order->update(['status' => 'canceled']);
                    break;
                default:
                    throw new \Exception('Unhandled event type: ' . $notificationObject->getEvent());
            }
            
            return response()->json([], 200);
        } catch (\Exception $e) {
            Log::error('Error processing webhook: ' . $e->getMessage());
            return response()->json(['error' => 'Error processing the webhook notification: ' . $e->getMessage()], 400);
        }
    }
}
