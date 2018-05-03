<?php

namespace Brazilian\Salary\Contracts;

interface Calculator
{
    /**
     * Calculate based on value.
     *
     * @param Valuable $value
     *
     * @return Valuable
     */
    public function calculate(Valuable $value);
}