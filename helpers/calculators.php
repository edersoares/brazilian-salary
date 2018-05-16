<?php

namespace Brazilian\Salary;

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
        $service = Services\Factory::salaryCalculatorService();

        return $service->calculateAnnualNetSalary($value);
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
        $service = Services\Factory::salaryCalculatorService();

        return $service->calculateNetSalary($value);
    }
}
