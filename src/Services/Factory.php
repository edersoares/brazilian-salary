<?php

namespace Brazilian\Salary\Services;

use Brazilian\Salary\Calculators\AdditionalVacationCalculator;
use Brazilian\Salary\Calculators\FgtsCalculator;
use Brazilian\Salary\Calculators\InssCalculator;
use Brazilian\Salary\Calculators\IrrfCalculator;
use Brazilian\Salary\Calculators\ThirteenthSalaryCalculator;
use Brazilian\Salary\Calculators\VacationCalculator;

class Factory
{
    /**
     * Return salary calculator service.
     *
     * @return SalaryCalculatorService
     */
    public static function salaryCalculatorService()
    {
        $inss = new InssCalculator();
        $irrf = new IrrfCalculator($inss);
        $fgts = new FgtsCalculator();
        $thirteenth = new ThirteenthSalaryCalculator();
        $vacation = new VacationCalculator();
        $additionalVacation = new AdditionalVacationCalculator();

        return new SalaryCalculatorService(
            $inss,
            $irrf,
            $fgts,
            $thirteenth,
            $vacation,
            $additionalVacation
        );
    }
}
