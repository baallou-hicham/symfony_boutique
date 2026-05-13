<?php

namespace App\Service\Provider;

use App\Service\Notification\EmailNotificationService;
use App\Service\Notification\NotificationInterface;
use App\Service\Payment\PaymentInterface;
use App\Service\Payment\StripePaymentService;

class AppServiceProvider
{
    public static function getServices() : array 
    {
        return [
            PaymentInterface::class => StripePaymentService::class,
            NotificationInterface::class => EmailNotificationService::class,
        ];
    }
}