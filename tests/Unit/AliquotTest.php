<?php

namespace Brazilian\Salary\Test\Unit;

use Brazilian\Salary\Aliquot;
use PHPUnit\Framework\TestCase;

class AliquotTest extends TestCase
{
    public function testAliquotInstance()
    {
        $aliquot = new Aliquot(12.5);

        $this->assertInstanceOf(Aliquot::class, $aliquot);

        $this->assertEquals(12.5, $aliquot->getAliquot());
    }
}
