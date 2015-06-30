<?php
namespace SelrahcD\ValueObjects;

use Assert\Assertion;

class MoneyM
{
    private $amount;

    private $currency;

    public function __construct($amount, Currency $currency)
    {
        Assertion::float($amount);

        $this->currency = $currency;
        $this->amount = $amount;
    }

    public function equals(MoneyM $money)
    {
        return $this->amount === $money->amount && $this->currency->equals($money->currency);
    }

    public function add(MoneyM $money)
    {
        if (! $this->currency->equals($money->currency)) {
            throw new \DomainException('You cannot add money in two different currencies.');
        }

        $this->amount += $money->amount;
    }

    public function __toString()
    {
        return $this->amount . ' ' . $this->currency;
    }
}
