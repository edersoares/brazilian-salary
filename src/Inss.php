<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Taxable;

class Inss implements Taxable
{
    /**
     * INSS aliquot.
     *
     * @var float
     */
    protected $aliquot;

    /**
     * INSS value.
     *
     * @var float
     */
    protected $baseValue;

    /**
     * INSS value.
     *
     * @var float
     */
    protected $value;

    /**
     * Inss constructor.
     *
     * @param float $value
     * @param float $baseValue
     * @param float $aliquot
     */
    public function __construct($value, $baseValue, $aliquot)
    {
        $this->aliquot = $aliquot;
        $this->baseValue = $baseValue;
        $this->value = $value;
    }

    /**
     * Return the value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Return the aliquot.
     *
     * @return float
     */
    public function getAliquot()
    {
        return $this->aliquot;
    }

    /**
     * Return the base value.
     *
     * @return float
     */
    public function getBaseValue()
    {
        return $this->baseValue;
    }
}