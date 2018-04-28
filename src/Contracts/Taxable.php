<?php

namespace Brazilian\Salary\Contracts;

interface Taxable extends Valuable
{
    /**
     * Return the aliquot.
     *
     * @return float
     */
    public function getAliquot();

    /**
     * Return the base value.
     *
     * @return float
     */
    public function getBaseValue();
}