<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Taxable;

class Fgts implements Taxable
{
    /**
     * FGTS aliquot.
     *
     * @var float
     */
    protected $aliquot;

    /**
     * FGTS value.
     *
     * @var float
     */
    protected $baseValue;

    /**
     * FGTS value.
     *
     * @var float
     */
    protected $value;

    /**
     * Fgts constructor.
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
