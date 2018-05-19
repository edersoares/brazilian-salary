<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Services\SalaryCalculatorService;

if (false === function_exists('annual')) {

    /**
     * Calculate the annual net salary for the value.
     *
     * @param float $value
     *
     * @return \Brazilian\Salary\AnnualNetSalaryCalculated
     */
    function annual($value)
    {
        return (new SalaryCalculatorService())->calculateAnnualNetSalary($value);
    }
}

if (false === function_exists('monthly')) {

    /**
     * Calculate the monthly net salary for the value.
     *
     * @param float $value
     *
     * @return \Brazilian\Salary\NetSalaryCalculated
     */
    function monthly($value)
    {
        return (new SalaryCalculatorService())->calculateNetSalary($value);
    }
}
