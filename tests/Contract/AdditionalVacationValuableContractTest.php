<?php

namespace Brazilian\Salary\Test\Contract;

use Brazilian\Salary\AdditionalVacation;
use Brazilian\Salary\Contracts\Valuable;
use PHPUnit\Framework\TestCase;

class AdditionalVacationValuableContractTest extends TestCase
{
    public function testValuableContract()
    {
        $additionalVacation = new AdditionalVacation(27.78);

        $this->assertInstanceOf(Valuable::class, $additionalVacation);
    }
}
