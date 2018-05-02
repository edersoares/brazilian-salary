<?php

namespace Brazilian\Salary\Test\Unit;

use Brazilian\Salary\Irrf;
use PHPUnit\Framework\TestCase;

class IrrfTest extends TestCase
{
    public function testIrrfInstance()
    {
        $irrf = new Irrf(452.29, 4806, 27.5);

        $this->assertInstanceOf(Irrf::class, $irrf);

        $this->assertEquals(452.29, $irrf->getValue());
        $this->assertEquals(4806, $irrf->getBaseValue());
        $this->assertEquals(27.5, $irrf->getAliquot());
    }
}
