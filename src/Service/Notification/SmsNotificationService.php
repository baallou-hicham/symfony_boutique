<?php

namespace App\Service\Notification;

class SmsNotificationService implements NotificationInterface
{
    public function send(string $message): string
    {
        // Simulate sending an SMS (for demonstration, we just return the message)
        return 'SMS sent: ' . $message;
    }
}