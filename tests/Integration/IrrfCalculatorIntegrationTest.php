<?php

namespace Brazilian\Salary\Test\Integration;

use Brazilian\Salary\Calculators\InssCalculator;
use Brazilian\Salary\Calculators\IrrfCalculator;
use Brazilian\Salary\Salary;
use PHPUnit\Framework\TestCase;

class IrrfCalculatorIntegrationTest extends TestCase
{
    public function testIrrfCalculator()
    {
        $irrfCalculator = new IrrfCalculator(
            new InssCalculator()
        );

        $irrf = $irrfCalculator->calculate(new Salary(5400));

        $this->assertEquals(452.29, $irrf->getValue());
        $this->assertEquals(4806, $irrf->getBaseValue());
        $this->assertEquals(27.5, $irrf->getAliquot());
    }

    public function testSalaryUntilOneThousand()
    {
        $irrfCalculator = new IrrfCalculator(
            new InssCalculator()
        );

        $irrf = $irrfCalculator->calculate(
            new Salary(1000)
        );

        $this->assertEquals(0, $irrf->getValue());
        $this->assertEquals(920, $irrf->getBaseValue());
        $this->assertEquals(0, $irrf->getAliquot());
    }

    public function testSalaryUntilThreeThousand()
    {
        $irrfCalculator = new IrrfCalculator(
            new InssCalculator()
        );

        $irrf = $irrfCalculator->calculate(
            new Salary(3000)
        );

        $this->assertEquals(57.45, $irrf->getValue());
        $this->assertEquals(2670, $irrf->getBaseValue());
        $this->assertEquals(7.5, $irrf->getAliquot());
    }

    public function testSalaryUntilFourThousand()
    {
        $irrfCalculator = new IrrfCalculator(
            new InssCalculator()
        );

        $irrf = $irrfCalculator->calculate(
            new Salary(4000)
        );

        $this->assertEquals(179.2, $irrf->getValue());
        $this->assertEquals(3560, $irrf->getBaseValue());
        $this->assertEquals(15, $irrf->getAliquot());
    }

    public function testSalaryUntilFiveThousand()
    {
        $irrfCalculator = new IrrfCalculator(
            new InssCalculator()
        );

        $irrf = $irrfCalculator->calculate(
            new Salary(5000)
        );

        $this->assertEquals(365.12, $irrf->getValue());
        $this->assertEquals(4450, $irrf->getBaseValue());
        $this->assertEquals(22.5, $irrf->getAliquot());
    }

    public function testSalaryUntilSixThousand()
    {
        $irrfCalculator = new IrrfCalculator(
            new InssCalculator()
        );

        $irrf = $irrfCalculator->calculate(
            new Salary(6000)
        );

        $this->assertEquals(609.85, $irrf->getValue());
        $this->assertEquals(5378.96, $irrf->getBaseValue());
        $this->assertEquals(27.5, $irrf->getAliquot());
    }
}
