<?php

namespace Brazilian\Salary\Calculators;

use Brazilian\Salary\Contracts\Calculator;
use Brazilian\Salary\Contracts\Valuable;
use Brazilian\Salary\ThirteenthSalary;

class ThirteenthSalaryCalculator implements Calculator
{
    /**
     * Calculate based on value.
     *
     * @param Valuable $value
     *
     * @return Valuable
     */
    public function calculate(Valuable $value)
    {
        $thirteenthSalary = round($value->getValue() / 12, 2);

        return new ThirteenthSalary($thirteenthSalary);
    }
}
