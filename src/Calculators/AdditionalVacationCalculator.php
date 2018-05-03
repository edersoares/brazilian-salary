<?php

namespace Brazilian\Salary\Calculators;

use Brazilian\Salary\AdditionalVacation;
use Brazilian\Salary\Contracts\Calculator;
use Brazilian\Salary\Contracts\Valuable;

class AdditionalVacationCalculator implements Calculator
{
    /**
     * Calculate based on value.
     *
     * @param Valuable $value
     *
     * @return AdditionalVacation
     */
    public function calculate(Valuable $value)
    {
        $additionalVacation = round($value->getValue() / 36, 2);

        return new AdditionalVacation($additionalVacation);
    }
}
