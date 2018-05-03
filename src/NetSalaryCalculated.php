<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Valuable;

class NetSalaryCalculated implements Valuable
{
    /**
     * Salary.
     *
     * @var Salary
     */
    protected $salary;

    /**
     * INSS.
     *
     * @var Inss
     */
    protected $inss;

    /**
     * IRRF.
     *
     * @var Irrf
     */
    protected $irrf;

    /**
     * NetSalaryCalculated constructor.
     *
     * @param Salary $salary
     * @param Inss $inss
     * @param Irrf $irrf
     */
    public function __construct(Salary $salary, Inss $inss, Irrf $irrf)
    {
        $this->salary = $salary;
        $this->inss = $inss;
        $this->irrf = $irrf;
    }

    /**
     * Return the salary.
     *
     * @return Salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Return the INSS.
     *
     * @return Inss
     */
    public function getInss()
    {
        return $this->inss;
    }

    /**
     * Return the IRRF.
     *
     * @return Irrf
     */
    public function getIrrf()
    {
        return $this->irrf;
    }

    /**
     * Return the net salary value.
     *
     * @return float
     */
    public function getValue()
    {
        $salaryValue = $this->salary->getValue();
        $inssValue = $this->inss->getValue();
        $irrfValue = $this->irrf->getValue();

        return round($salaryValue - $inssValue - $irrfValue, 2);
    }
}
