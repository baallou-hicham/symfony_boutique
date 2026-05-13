<?php

namespace App\Service;

class DiscountService
{
    public function calculate(float $price): float
    {
        // Example discount calculation (replace with actual logic)
        return $price - ($price * 0.2); // 20% discount
    }
}