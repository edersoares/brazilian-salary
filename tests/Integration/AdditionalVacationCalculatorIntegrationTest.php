<?php

namespace Brazilian\Salary\Test\Integration;

use Brazilian\Salary\AdditionalVacation;
use Brazilian\Salary\Calculators\AdditionalVacationCalculator;
use Brazilian\Salary\Salary;
use PHPUnit\Framework\TestCase;

class AdditionalVacationCalculatorIntegrationTest extends TestCase
{
    public function testAdditionalVacationCalculator()
    {
        $calculator = new AdditionalVacationCalculator();

        $additionalVacation = $calculator->calculate(new Salary(1000));

        $this->assertInstanceOf(AdditionalVacation::class, $additionalVacation);

        $this->assertEquals(27.78, $additionalVacation->getValue());
    }
}
