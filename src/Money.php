<?php
namespace SelrahcD\ValueObjects;

use Assert\Assertion;

class Money
{
    private $amount;

    private $currency;

    public function __construct($amount, Currency $currency)
    {
        Assertion::float($amount);

        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function equals(Money $money)
    {
        return $this->amount === $money->amount && $this->currency->equals($money->currency);
    }

    public function add(Money $money)
    {
        if (! $this->currency->equals($money->currency))
        {
            throw new \DomainException('You cannot add money in two different currencies.');
        }

        return new self($this->amount + $money->amount, $this->currency);
    }

    public function __toString()
    {
        return $this->amount . ' ' . $this->currency;
    }
}
