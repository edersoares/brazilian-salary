<?php

namespace Brazilian\Salary\Test\Integration;

use Brazilian\Salary\Calculators\ThirteenthSalaryCalculator;
use Brazilian\Salary\Salary;
use Brazilian\Salary\ThirteenthSalary;
use PHPUnit\Framework\TestCase;

class ThirteenthSalaryCalculatorIntegrationTest extends TestCase
{
    public function testThirteenthSalaryCalculator()
    {
        $calculator = new ThirteenthSalaryCalculator();

        $thirteenthSalary = $calculator->calculate(new Salary(1000));

        $this->assertInstanceOf(ThirteenthSalary::class, $thirteenthSalary);

        $this->assertEquals(83.33, $thirteenthSalary->getValue());
    }
}
