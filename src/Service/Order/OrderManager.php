<?php

namespace App\Service\Order;

use App\Service\Notification\NotificationInterface;
use App\Service\Payment\PaymentInterface;

class OrderManager
{
    public function __construct(private PaymentInterface $payment, private NotificationInterface $notification){}
	
    public function process(float $amount) : array {
        $paymentResult = $this->payment->pay($amount);

        $notificationResult = $this->notification->send("Commande validee.");

        return [
            'payment' => $paymentResult,
            'notification' => $notificationResult
        ];
    }
}