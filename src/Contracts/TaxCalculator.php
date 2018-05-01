<?php

namespace Brazilian\Salary\Contracts;

interface TaxCalculator
{
    /**
     * Calculate a tax based on value.
     *
     * @param Valuable $value
     *
     * @return Taxable
     */
    public function calculate(Valuable $value);
}