<?php

namespace App\Service;

class LoggerService
{
    public function __construct(private MailerService $mailer, private DiscountService $discountService)
    {
    }

    public function log(string $message): string
    {
        // Log the message (for demonstration, we just return it)
        return $message . ' - ' . $this->mailer->send() . ' - Discount: ' . $this->discountService->calculate(100);
    }
}