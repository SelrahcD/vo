<?php
namespace SelrahcD\ValueObjects;

use Assert\Assertion;

class Email
{
    private $value;

    public function __construct($value)
    {
        Assertion::email($value);

        $this->value = $value;
    }

    public function equals(Email $email)
    {
        return $this->value === $email->value;

        // return $this == $email;
    }
}
