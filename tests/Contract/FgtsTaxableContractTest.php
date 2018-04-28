<?php

namespace Brazilian\Salary\Test\Contract;

use Brazilian\Salary\Contracts\Taxable;
use Brazilian\Salary\Fgts;
use PHPUnit\Framework\TestCase;

class FgtsTaxableContractTest extends TestCase
{
    public function testTaxableContract()
    {
        $fgts = new Fgts(80, 1000, 8);

        $this->assertInstanceOf(Taxable::class, $fgts);
    }
}
