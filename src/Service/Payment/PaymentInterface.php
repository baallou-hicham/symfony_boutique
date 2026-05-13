<?php

namespace App\Service\Payment;

interface PaymentInterface
{
    public function pay(float $amount) : string;
}