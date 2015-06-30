<?php
namespace SelrahcD\ValueObjects;

class Temperature2
{
    private $value;

    private $unit;

    public function __construct($value, $unit)
    {
        $this->assertSomethingAboutValue($value);
        $this->assertSomethingAboutUnit($unit);

        $this->value = $value;
        $this->unit = $unit;
    }

    public function equals(Temperature2 $temperature1)
    {
        $thisInCelsius = $this->toCelsius();temperature1
        $temperature1InCelsius = $temperature1->toCelsius();

        return $thisInCelsius->value === $temperature1InCelsius->value;
    }

    public function toCelsius()
    {
        if ($this->unit === 'celsius') {
            return new self($this->value, $this->unit);
        } elseif ($this->unit === 'kelvin') {
            return new self($this->value - 273.15, 'kelvin');
        }
    }

    public function toKelvin()
    {
        if ($this->unit === 'kelvin') {
            return new self($this->value, $this->unit);
        } elseif ($this->unit === 'celsius') {
            return new self($this->value + 273.15, 'kelvin');
        }
    }

    public function isFreezing()
    {
        $thisInCelsius = $this->toCelsius();
        return $thisInCelsius->value < 0;
    }

    private function assertSomethingAboutUnit($unit)
    {
    }

    private function assertSomethingAboutValue($value)
    {
    }
}
