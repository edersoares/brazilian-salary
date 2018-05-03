<?php

namespace Brazilian\Salary\Test\Contract;

use Brazilian\Salary\Contracts\Valuable;
use Brazilian\Salary\Vacation;
use PHPUnit\Framework\TestCase;

class VacationValuableContractTest extends TestCase
{
    public function testValuableContract()
    {
        $additionalVacation = new Vacation(83.33);

        $this->assertInstanceOf(Valuable::class, $additionalVacation);
    }
}
