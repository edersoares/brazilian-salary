<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Valuable;

class ThirteenthSalary implements Valuable
{
    /**
     * Thirteenth salary value.
     *
     * @var float
     */
    protected $value;

    /**
     * ThirteenthSalary constructor.
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
