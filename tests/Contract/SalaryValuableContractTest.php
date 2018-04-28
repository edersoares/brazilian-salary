<?php

namespace Brazilian\Salary\Test\Contract;

use Brazilian\Salary\Salary;
use Brazilian\Salary\Contracts\Valuable;
use PHPUnit\Framework\TestCase;

class SalaryValuableContractTest extends TestCase
{
    public function testValuableContract()
    {
        $salary = new Salary(123.45);

        $this->assertInstanceOf(Valuable::class, $salary);
    }
}
