<?php

namespace Brazilian\Salary\Test\Unit;

use Brazilian\Salary\Inss;
use PHPUnit\Framework\TestCase;

class InssTest extends TestCase
{
    public function testInssInstance()
    {
        $inss = new Inss(80, 1000, 8);

        $this->assertInstanceOf(Inss::class, $inss);

        $this->assertEquals(80, $inss->getValue());
        $this->assertEquals(1000, $inss->getBaseValue());
        $this->assertEquals(8, $inss->getAliquot());
    }
}
