<?php

namespace Brazilian\Salary\Contracts;

interface Taxable extends Aliquot, Valuable
{
    /**
     * Return the base value.
     *
     * @return float
     */
    public function getBaseValue();
}