<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Taxable;

class Irrf implements Taxable
{
    /**
     * IRRF aliquot.
     *
     * @var float
     */
    protected $aliquot;

    /**
     * IRRF base value.
     *
     * @var float
     */
    protected $baseValue;

    /**
     * IRRF value.
     *
     * @var float
     */
    protected $value;

    /**
     * Irrf constructor.
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

    /**
     * Return the value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}
