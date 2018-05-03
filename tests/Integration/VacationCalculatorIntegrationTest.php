<?php

namespace Brazilian\Salary\Test\Integration;

use Brazilian\Salary\Calculators\VacationCalculator;
use Brazilian\Salary\Salary;
use Brazilian\Salary\Vacation;
use PHPUnit\Framework\TestCase;

class VacationCalculatorIntegrationTest extends TestCase
{
    public function testVacationCalculator()
    {
        $vacationCalculator = new VacationCalculator();

        $vacation = $vacationCalculator->calculate(new Salary(1000));

        $this->assertInstanceOf(Vacation::class, $vacation);

        $this->assertEquals(83.33, $vacation->getValue());
    }
}