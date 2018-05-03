<?php

namespace Brazilian\Salary\Services;

use Brazilian\Salary\Calculators\InssCalculator;
use Brazilian\Salary\Calculators\IrrfCalculator;
use Brazilian\Salary\NetSalaryCalculated;
use Brazilian\Salary\Salary;

class SalaryCalculatorService
{
    /**
     * @var InssCalculator
     */
    protected $inss;

    /**
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
     * @param $value
     */
    public function calculateNetSalary($value)
    {
        $salary = new Salary($value);
        $inss = $this->inss->calculate($salary);
        $irrf = $this->irrf->calculate($salary);

        return new NetSalaryCalculated(
            $salary, $inss, $irrf
        );
    }
}
