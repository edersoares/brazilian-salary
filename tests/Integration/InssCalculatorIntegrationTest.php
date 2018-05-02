<?php

namespace Brazilian\Salary\Test\Integration;

use Brazilian\Salary\Calculators\InssCalculator;
use Brazilian\Salary\Salary;
use PHPUnit\Framework\TestCase;

class InssCalculatorIntegrationTest extends TestCase
{
    public function testInssCalculator()
    {
        $inssCalculator = new InssCalculator();

        $inss = $inssCalculator->calculate(new Salary(1000));

        $this->assertEquals(80, $inss->getValue());
        $this->assertEquals(8, $inss->getAliquot());
        $this->assertEquals(1000, $inss->getBaseValue());
    }
}
