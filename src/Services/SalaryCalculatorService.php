<?php

namespace Brazilian\Salary\Services;

use Brazilian\Salary\AnnualNetSalaryCalculated;
use Brazilian\Salary\Calculators\AdditionalVacationCalculator;
use Brazilian\Salary\Calculators\FgtsCalculator;
use Brazilian\Salary\Calculators\InssCalculator;
use Brazilian\Salary\Calculators\IrrfCalculator;
use Brazilian\Salary\Calculators\ThirteenthSalaryCalculator;
use Brazilian\Salary\Calculators\VacationCalculator;
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
     * FGTS calculator.
     *
     * @var FgtsCalculator
     */
    protected $fgts;

    /**
     * Thirteenth salary calculator.
     *
     * @var ThirteenthSalaryCalculator
     */
    protected $thirteenth;

    /**
     * Vacation calculator.
     *
     * @var VacationCalculator
     */
    protected $vacation;

    /**
     * Additional vacation calculator.
     *
     * @var AdditionalVacationCalculator
     */
    protected $additionalVacation;

    /**
     * SalaryCalculatorService constructor.
     *
     * @param InssCalculator               $inss
     * @param IrrfCalculator               $irrf
     * @param FgtsCalculator               $fgts
     * @param ThirteenthSalaryCalculator   $thirteenth
     * @param VacationCalculator           $vacation
     * @param AdditionalVacationCalculator $additionalVacation
     */
    public function __construct(
        InssCalculator $inss,
        IrrfCalculator $irrf,
        FgtsCalculator $fgts,
        ThirteenthSalaryCalculator $thirteenth,
        VacationCalculator $vacation,
        AdditionalVacationCalculator $additionalVacation
    ) {
        $this->inss = $inss;
        $this->irrf = $irrf;
        $this->fgts = $fgts;
        $this->thirteenth = $thirteenth;
        $this->vacation = $vacation;
        $this->additionalVacation = $additionalVacation;
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

    public function calculateAnnualNetSalary($value)
    {
        $salary = new Salary($value);

        $inss = $this->inss->calculate($salary);
        $irrf = $this->irrf->calculate($salary);
        $fgts = $this->fgts->calculate($salary);
        $thirteenth = $this->thirteenth->calculate($salary);
        $vacation = $this->vacation->calculate($salary);
        $additionalVacation = $this->additionalVacation->calculate($salary);

        return new AnnualNetSalaryCalculated(
            $salary,
            $inss,
            $irrf,
            $fgts,
            $thirteenth,
            $vacation,
            $additionalVacation
        );
    }
}
