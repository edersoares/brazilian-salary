<?php

namespace Brazilian\Salary\Calculators;

use Brazilian\Salary\Contracts\Taxable;
use Brazilian\Salary\Contracts\TaxCalculator;
use Brazilian\Salary\Contracts\Valuable;
use Brazilian\Salary\Fgts;

class FgtsCalculator implements TaxCalculator
{
    /**
     * Aliquot value.
     *
     * @var float
     */
    protected $aliquot = 8;

    /**
     * Calculate a tax based on value.
     *
     * @param Valuable $value
     *
     * @return Taxable
     */
    public function calculate(Valuable $value)
    {
        $baseValue = $value->getValue();
        $fgtsValue = round($baseValue * $this->aliquot / 100, 2);

        return new Fgts($fgtsValue, $baseValue, $this->aliquot);
    }
}