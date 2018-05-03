<?php

namespace Brazilian\Salary\Calculators;

use Brazilian\Salary\Contracts\TaxCalculator;
use Brazilian\Salary\Contracts\Valuable;
use Brazilian\Salary\Irrf;

class IrrfCalculator implements TaxCalculator
{
    /**
     * INSS calculator.
     *
     * @var TaxCalculator
     */
    protected $inssCalculator;

    /**
     * IrrfCalculator constructor.
     *
     * @param TaxCalculator $inssCalculator
     */
    public function __construct(TaxCalculator $inssCalculator)
    {
        $this->inssCalculator = $inssCalculator;
    }

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

        if ($value >= 1903.99 && $value <= 2826.65) {
            $aliquot = 7.5;
        }

        if ($value >= 2826.66 && $value <= 3751.05) {
            $aliquot = 15;
        }

        if ($value >= 3751.06  && $value <= 4664.68) {
            $aliquot = 22.5;
        }

        if ($value >= 4664.68) {
            $aliquot = 27.5;
        }

        return $aliquot;
    }

    /**
     * Return the deductible quote value.
     *
     * @param float $value Base value to get deductible quote value
     *
     * @return float
     */
    protected function getDeductibleQuote($value)
    {
        $deductibleQuote = 0;

        if ($value >= 1903.99 && $value <= 2826.65) {
            $deductibleQuote = 142.8;
        }

        if ($value >= 2826.66 && $value <= 3751.05) {
            $deductibleQuote = 354.8;
        }

        if ($value >= 3751.06  && $value <= 4664.68) {
            $deductibleQuote = 636.13;
        }

        if ($value >= 4664.68) {
            $deductibleQuote = 869.36;
        }

        return $deductibleQuote;
    }

    /**
     * Calculate the base value.
     *
     * @param Valuable $value
     *
     * @return float
     */
    protected function calculateBaseValue($value)
    {
        $inss = $this->inssCalculator->calculate($value);

        return round($value->getValue() - $inss->getValue(), 2);
    }

    /**
     * Calculate a tax based on value.
     *
     * @param Valuable $value
     *
     * @return Irrf
     */
    public function calculate(Valuable $value)
    {
        $baseValue = $this->calculateBaseValue($value);
        $aliquot = $this->getAliquot($baseValue);
        $deductibleQuote = $this->getDeductibleQuote($baseValue);

        $irrfValue = round($baseValue * $aliquot / 100 - $deductibleQuote, 2);

        return new Irrf($irrfValue, $baseValue, $aliquot);
    }
}
