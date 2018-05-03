<?php

namespace Brazilian\Salary\Services;

use Brazilian\Salary\Calculators\InssCalculator;
use Brazilian\Salary\Calculators\IrrfCalculator;
use Brazilian\Salary\NetSalaryCalculated;
use Brazilian\Salary\Salary;

class SalaryCalculatorService
{
    /**
     * INSS calculator.
     *
     * @var InssCalculator
     */
    protected $inss;

    /**
     * IRRF calculator.
     *
     * @var IrrfCalculator
     */
    protected $irrf;

    /**
     * SalaryCalculatorService constructor.
     *
     * @param InssCalculator $inss
     * @param IrrfCalculator $irrf
     */
    public function __construct(InssCalculator $inss, IrrfCalculator $irrf)
    {
        $this->inss = $inss;
        $this->irrf = $irrf;
    }

    /**
     * Calculate the net salary value.
     *
     * @param float $value
     *
     * @return NetSalaryCalculated
     */
    public function calculateNetSalary($value)
    {
        $salary = new Salary($value);

        $inss = $this->inss->calculate($salary);
        $irrf = $this->irrf->calculate($salary);

        return new NetSalaryCalculated(
            $salary,
            $inss,
            $irrf
        );
    }
}
