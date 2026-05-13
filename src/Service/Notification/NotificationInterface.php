<?php

namespace App\Service\Notification;

interface NotificationInterface
{
    public function send(string $message): string;
}