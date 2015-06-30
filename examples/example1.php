<?php
require '../vendor/autoload.php';

use SelrahcD\ValueObjects\MoneyM;
use SelrahcD\ValueObjects\Money;
use SelrahcD\ValueObjects\Currency;

echo "Mutable". PHP_EOL;

$euro10 = new MoneyM(10.0, new Currency('EUR'));
$euro5 = new MoneyM(5.0, new Currency('EUR'));
echo '10 EUR : ' . $euro10 . PHP_EOL;
echo '5 EUR : ' . $euro5 . PHP_EOL;
echo 'Add 5' . PHP_EOL;
$euro10->add($euro5);
echo '10 EUR : ' . $euro10 . PHP_EOL;
echo '5 EUR : ' . $euro5 . PHP_EOL;

echo "#############################" . PHP_EOL;
echo "Immutable". PHP_EOL;

$euro10 = new Money(10.0, new Currency('EUR'));
$euro5 = new Money(5.0, new Currency('EUR'));
echo '10 EUR : ' . $euro10 . PHP_EOL;
echo '5 EUR : ' . $euro5 . PHP_EOL;
echo 'Add 5' . PHP_EOL;
$euro15 = $euro10->add($euro5);
echo '10 EUR : ' . $euro10 . PHP_EOL;
echo '5 EUR : ' . $euro5 . PHP_EOL;
echo '15 EUR : ' . $euro15 . PHP_EOL;

