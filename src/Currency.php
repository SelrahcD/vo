<?php
namespace SelrahcD\ValueObjects;

use Assert\Assertion;

class Currency
{
    private $iso;

    public function __construct($iso)
    {
        Assertion::string($iso);

        $this->assertIsAnAllowedCurrency($iso);

        $this->iso = $iso;
    }

    public function equals(Currency $currency)
    {
        return $this->iso === $currency->iso;
    }

    private function assertIsAnAllowedCurrency($iso)
    {
        if (!in_array($iso, array('EUR', 'USD', 'GBP'))) {
            throw new \InvalidArgument('Invalid iso code for currency');
        }
    }

    public function __toString()
    {
        return $this->iso;
    }
}
