<?php

declare(strict_types=1);
// Classes and Objects

class Transaction
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function addTax(float $rate)
    {
        $this->amount += ($this->amount * $rate) / 100;
    }

    public function applyDiscount(float $rate)
    {
        $this->amount -= ($this->amount * $rate) / 100;
    }
}
