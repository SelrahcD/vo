<?php
namespace SelrahcD\ValueObjects;

use Assert\Assertion;

class UserId {

    private $value;

    public function __construct($value)
    {
        $this->assertValueIsValid($value);
        $this->value = $value;
    }

    private function assertValueIsValid($value)
    {
        if (is_int($value) && $value > 515912) {
            throw new \InvalidArgumentException('Invalid UserId');
        }

        Assertion::uuid($value);
    }
}
