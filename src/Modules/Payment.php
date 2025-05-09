<?php

class Payment
{
    private string    $paymentId;
    private float     $amount;
    private string    $method;
    private \DateTime $date;
    private string    $status;

    public function __construct(string $paymentId, float $amount, string $method, \DateTime $date, string $status)
    {
        $this->paymentId = $paymentId;
        $this->amount    = $amount;
        $this->method    = $method;
        $this->date      = $date;
        $this->status    = $status;
    }

    public function processPayment(): bool { /* TODO */ return false; }
    public function viewPaymentDetails(): Payment { return $this; }

    // Getters & Setters...
}
