<?php

namespace Brazilian\Salary;

use Brazilian\Salary\Contracts\Aliquot as AliquotContract;

class Aliquot implements AliquotContract
{
    /**
     * Aliquot.
     *
     * @var float
     */
    protected $aliquot;

    /**
     * Aliquot constructor.
     *
     * @param float $aliquot
     */
    public function __construct($aliquot)
    {
        $this->aliquot = $aliquot;
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
}
