<?php

namespace Brazilian\Salary\Test\Contract;

use Brazilian\Salary\Contracts\Aliquot as AliquotContract;
use Brazilian\Salary\Aliquot;
use PHPUnit\Framework\TestCase;

class AliquotAliquotContractTest extends TestCase
{
    public function testAliquotContract()
    {
        $aliquot = new Aliquot(123.45);

        $this->assertInstanceOf(AliquotContract::class, $aliquot);
    }
}
