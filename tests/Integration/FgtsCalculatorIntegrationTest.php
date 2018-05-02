<?php

namespace Brazilian\Salary\Test\Integration;

use Brazilian\Salary\Calculators\FgtsCalculator;
use Brazilian\Salary\Fgts;
use Brazilian\Salary\Salary;
use PHPUnit\Framework\TestCase;

class FgtsCalculatorIntegrationTest extends TestCase
{
    public function testFgtsCalculator()
    {
        $fgtsCalculator = new FgtsCalculator();

        $fgts = $fgtsCalculator->calculate(new Salary(1000));

        $this->assertInstanceOf(Fgts::class, $fgts);

        $this->assertEquals(80, $fgts->getValue());
        $this->assertEquals(8, $fgts->getAliquot());
        $this->assertEquals(1000, $fgts->getBaseValue());
    }
}
