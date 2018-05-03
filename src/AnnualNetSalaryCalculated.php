<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Valuable;

class AnnualNetSalaryCalculated extends NetSalaryCalculated implements Valuable
{
    /**
     * FGTS.
     *
     * @var Fgts
     */
    protected $fgts;

    /**
     * Thirteenth salary.
     *
     * @var ThirteenthSalary
     */
    protected $thirteenth;

    /**
     * Vacation.
     *
     * @var Vacation
     */
    protected $vacation;

    /**
     * Additional vacation.
     *
     * @var AdditionalVacation
     */
    protected $additionalVacation;

    /**
     * AnnualNetSalaryCalculated constructor.
     *
     * @param Salary             $salary
     * @param Inss               $inss
     * @param Irrf               $irrf
     * @param Fgts               $fgts
     * @param ThirteenthSalary   $thirteenth
     * @param Vacation           $vacation
     * @param AdditionalVacation $additionalVacation
     */
    public function __construct(
        Salary $salary,
        Inss $inss,
        Irrf $irrf,
        Fgts $fgts,
        ThirteenthSalary $thirteenth,
        Vacation $vacation,
        AdditionalVacation $additionalVacation
    ) {
        parent::__construct($salary, $inss, $irrf);

        $this->fgts = $fgts;
        $this->thirteenth = $thirteenth;
        $this->vacation = $vacation;
        $this->additionalVacation = $additionalVacation;
    }

    /**
     * Return the net salary value.
     *
     * @return float
     */
    public function getValue()
    {
        $monthlyNetSalary = parent::getValue();
        $monthlyFgts = $this->fgts->getValue();
        $monthlyThirteenth = $this->thirteenth->getValue();
        $monthlyVacation = $this->vacation->getValue();
        $monthlyAdditionalVacation = $this->additionalVacation->getValue();

        $monthlySalary = array_sum([
            $monthlyNetSalary,
            $monthlyFgts,
            $monthlyThirteenth,
            $monthlyVacation,
            $monthlyAdditionalVacation
        ]);

        return round($monthlySalary * 12, 2);
    }
}
