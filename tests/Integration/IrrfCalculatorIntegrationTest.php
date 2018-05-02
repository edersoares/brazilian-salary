<?php

namespace Brazilian\Salary\Test\Integration;

use Brazilian\Salary\Calculators\InssCalculator;
use Brazilian\Salary\Calculators\IrrfCalculator;
use Brazilian\Salary\Salary;
use PHPUnit\Framework\TestCase;

class IrrfCalculatorIntegrationTest extends TestCase
{
    public function testIrrfCalculator()
    {
        $irrfCalculator = new IrrfCalculator(
            new InssCalculator()
        );

        $irrf = $irrfCalculator->calculate(new Salary(5400));

        $this->assertEquals(452.29, $irrf->getValue());
        $this->assertEquals(4806, $irrf->getBaseValue());
        $this->assertEquals(27.5, $irrf->getAliquot());
    }
}
