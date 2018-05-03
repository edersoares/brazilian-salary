<?php

namespace Brazilian\Salary\Test\Unit;

use Brazilian\Salary\ThirteenthSalary;
use PHPUnit\Framework\TestCase;

class ThirteenthSalaryTest extends TestCase
{
    public function testThirteenthSalaryInstance()
    {
        $thirteenth = new ThirteenthSalary(83.33);

        $this->assertEquals(83.33, $thirteenth->getValue());
    }
}
