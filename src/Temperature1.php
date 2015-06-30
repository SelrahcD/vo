<?php
namespace SelrahcD\ValueObjects;

class Temperature1
{
    private $value;

    public function __construct($value)
    {
        $this->assertSomethingAboutValue($value);

        $this->value = $value;
    }

    public function equals(Temperature1 $temperature1)
    {
        return $this->value === $temperature1->value;
    }

    public function isFreezing()
    {
        return $this->value < 0;
    }

    private function assertSomethingAboutValue($value)
    {
    }
}
