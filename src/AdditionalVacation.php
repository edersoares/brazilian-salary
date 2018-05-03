<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Valuable;

class AdditionalVacation implements Valuable
{
    /**
     * Additional vacation Value.
     *
     * @var float
     */
    protected $value;

    /**
     * AdditionalVacation constructor.
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Return the value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}
