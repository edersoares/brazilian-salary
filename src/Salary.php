<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Valuable;

class Salary implements Valuable
{
    /**
     * Salary value.
     *
     * @var float
     */
    protected $value;

    /**
     * Salary constructor.
     *
     * @param float $value Salary value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Return the salary value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}
