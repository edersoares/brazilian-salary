<?php

namespace Brazilian\Salary\Test\Contract;

use Brazilian\Salary\Contracts\Taxable;
use Brazilian\Salary\Irrf;
use PHPUnit\Framework\TestCase;

class IrrfTaxableContractTest extends TestCase
{
    public function testTaxableContract()
    {
        $irpf = new Irrf(452.29, 4806, 27.5);

        $this->assertInstanceOf(Taxable::class, $irpf);
    }
}
