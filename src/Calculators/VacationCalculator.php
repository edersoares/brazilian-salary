<?php

namespace Brazilian\Salary\Calculators;

use Brazilian\Salary\Contracts\Calculator;
use Brazilian\Salary\Contracts\Valuable;
use Brazilian\Salary\Vacation;

class VacationCalculator implements Calculator
{
    /**
     * Calculate based on value.
     *
     * @param Valuable $value
     *
     * @return Vacation
     */
    public function calculate(Valuable $value)
    {
        $vacation = round($value->getValue() / 12, 2);

        return new Vacation($vacation);
    }
}
