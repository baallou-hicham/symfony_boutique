<?php

namespace App\Service\Notification;

class EmailNotificationService implements NotificationInterface
{
    public function send(string $message): string
    {
        // Simulate sending an email (for demonstration, we just return the message)
        return 'Email sent: ' . $message;
    }
}