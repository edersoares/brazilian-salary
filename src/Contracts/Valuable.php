<?php

namespace Brazilian\Salary\Contracts;

interface Valuable
{
    /**
     * Return the value.
     *
     * @return float
     */
    public function getValue();
}
