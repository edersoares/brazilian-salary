<?php

namespace Brazilian\Salary\Calculators;

use Brazilian\Salary\Contracts\Taxable;
use Brazilian\Salary\Contracts\TaxCalculator;
use Brazilian\Salary\Contracts\Valuable;
use Brazilian\Salary\Inss;

class InssCalculator implements TaxCalculator
{
    /**
     * Return the aliquot to base value.
     *
     * @param float $value Base value to get aliquot
     *
     * @return float
     */
    protected function getAliquot($value)
    {
        $aliquot = 0;

        if ($value <= 1693.72) {
            $aliquot = 8;
        }

        if ($value > 1693.73 && $value <= 2822.90) {
            $aliquot = 9;
        }

        if ($value > 2822.91) {
            $aliquot = 11;
        }

        return $aliquot;
    }

    /**
     * Calculate a tax based on value.
     *
     * @param Valuable $value
     *
     * @return Taxable
     */
    public function calculate(Valuable $value)
    {
        $aliquot = $this->getAliquot(
            $baseValue = $value->getValue()
        );

        $inssValue = $baseValue * $aliquot / 100;

        return new Inss($inssValue, $baseValue, $aliquot);
    }
}