<?php

namespace Brazilian\Salary\Test\Unit;

use Brazilian\Salary\Vacation;
use PHPUnit\Framework\TestCase;

class VacationTest extends TestCase
{
    public function testVacationInstance()
    {
        $vacation = new Vacation(83.33);

        $this->assertEquals(83.33, $vacation->getValue());
    }
}
