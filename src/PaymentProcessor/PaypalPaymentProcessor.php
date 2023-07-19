<?php
declare(strict_types=1);

namespace App\PaymentProcessor;

use Exception;

class PaypalPaymentProcessor
{
    /**
     * @throws Exception in case of a failed payment
     */
    public function pay(int $price): void
    {
        if ($price > 100) {
            throw new Exception('Too high price');
        }

        //process payment logic
    }
}