<?php

namespace Brazilian\Salary\Test\Unit;

use Brazilian\Salary\Fgts;
use PHPUnit\Framework\TestCase;

class FgtsTest extends TestCase
{
    public function testFgtsInstance()
    {
        $fgts = new Fgts(80, 1000, 8);

        $this->assertInstanceOf(Fgts::class, $fgts);

        $this->assertEquals(80, $fgts->getValue());
        $this->assertEquals(1000, $fgts->getBaseValue());
        $this->assertEquals(8, $fgts->getAliquot());
    }
}
