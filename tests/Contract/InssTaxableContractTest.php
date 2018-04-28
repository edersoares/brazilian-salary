<?php

namespace Brazilian\Salary\Test\Contract;

use Brazilian\Salary\Contracts\Taxable;
use Brazilian\Salary\Inss;
use PHPUnit\Framework\TestCase;

class InssTaxableContractTest extends TestCase
{
    public function testTaxableContract()
    {
        $inss = new Inss(80, 1000, 8);

        $this->assertInstanceOf(Taxable::class, $inss);
    }
}
