<?php
require '../vendor/autoload.php';

use SelrahcD\ValueObjects\MoneyM;
use SelrahcD\ValueObjects\Money;
use SelrahcD\ValueObjects\Currency;

echo "Mutable". PHP_EOL;

$euro10 = new MoneyM(10.0, new Currency('EUR'));
$bill10EUR = new Bill($euro10);
echo "Total Bill 10 EUR : " . $bill10EUR->total() . PHP_EOL;
echo 'Add 5EUR to $eur10' . PHP_EOL;
$euro10->add(new MoneyM(5.0, new Currency('EUR')));
echo "Total Bill 10 EUR : " . $bill10EUR->total() . PHP_EOL;

echo "#############################" . PHP_EOL;
echo "Immutable". PHP_EOL;

$euro10 = new Money(10.0, new Currency('EUR'));
$bill10EUR = new Bill($euro10);
echo "Total Bill 10 EUR : " . $bill10EUR->total() . PHP_EOL;
echo 'Add 5EUR to $eur10' . PHP_EOL;
$euro10->add(new Money(5.0, new Currency('EUR')));
echo "Total Bill 10 EUR : " . $bill10EUR->total() . PHP_EOL;


class Bill {

    private $total;

    public function __construct($total) {
        $this->total = $total;
    }

    public function total()
    {
        return $this->total;
    }
}
