<?php

namespace Brazilian\Salary\Test\Unit;

use Brazilian\Salary\Salary;
use PHPUnit\Framework\TestCase;

class SalaryTest extends TestCase
{
    public function testSalaryInstance()
    {
        $salary = new Salary(123.45);

        $this->assertInstanceOf(Salary::class, $salary);
        $this->assertEquals(123.45, $salary->getValue());
    }
}
