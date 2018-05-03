<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Valuable;

class NetSalaryCalculated implements Valuable
{
    /**
     * @var Salary
     */
    protected $salary;

    /**
     * @var Inss
     */
    protected $inss;

    /**
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
     * @return Salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return Inss
     */
    public function getInss()
    {
        return $this->inss;
    }

    /**
     * @return Irrf
     */
    public function getIrrf()
    {
        return $this->irrf;
    }

    /**
     * Return the value.
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
