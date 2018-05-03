<?php

namespace Brazilian\Salary\Test\Unit;

use Brazilian\Salary\AdditionalVacation;
use PHPUnit\Framework\TestCase;

class AdditionalVacationTest extends TestCase
{
    public function testAdditionalVacationInstance()
    {
        $additionalVacation = new AdditionalVacation(27.78);

        $this->assertEquals(27.78, $additionalVacation->getValue());
    }
}
