<?php

namespace Brazilian\Salary\Test\Contract;

use Brazilian\Salary\Contracts\Valuable;
use Brazilian\Salary\ThirteenthSalary;
use PHPUnit\Framework\TestCase;

class ThirteenthSalaryValuableContractTest extends TestCase
{
    public function testValuableContract()
    {
        $thirteenth = new ThirteenthSalary(83.33);

        $this->assertInstanceOf(Valuable::class, $thirteenth);
    }
}
