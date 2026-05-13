<?php

namespace App\Service\Payment;

use Symfony\Component\DependencyInjection\Attribute\Autowire;

class PaypalPaymentService implements PaymentInterface
{
    public function __construct(#[Autowire('%app.currency%')] private string $currency) {}
	
    public function pay(float $amount): string
    {
        // Simulate payment processing (replace with actual logic)
        return "Paiement PayPal : $amount " . $this->currency;
    }

}