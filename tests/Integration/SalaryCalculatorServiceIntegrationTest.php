<?php

namespace Brazilian\Salary\Test\Integration;

use Brazilian\Salary\Calculators\AdditionalVacationCalculator;
use Brazilian\Salary\Calculators\FgtsCalculator;
use Brazilian\Salary\Calculators\InssCalculator;
use Brazilian\Salary\Calculators\IrrfCalculator;
use Brazilian\Salary\Calculators\ThirteenthSalaryCalculator;
use Brazilian\Salary\Calculators\VacationCalculator;
use Brazilian\Salary\Inss;
use Brazilian\Salary\Irrf;
use Brazilian\Salary\NetSalaryCalculated;
use Brazilian\Salary\Salary;
use Brazilian\Salary\Services\SalaryCalculatorService;
use PHPUnit\Framework\TestCase;

class SalaryCalculatorServiceIntegrationTest extends TestCase
{
    public function testSalaryCalculatorService()
    {
        $inss = new InssCalculator();
        $irrf = new IrrfCalculator($inss);
        $fgts = new FgtsCalculator();
        $thirteenth = new ThirteenthSalaryCalculator();
        $vacation = new VacationCalculator();
        $additionalVacation = new AdditionalVacationCalculator();

        $service = new SalaryCalculatorService($inss, $irrf, $fgts, $thirteenth, $vacation, $additionalVacation);

        $netSalary = $service->calculateNetSalary(5000);

        $this->assertInstanceOf(NetSalaryCalculated::class, $netSalary);
        $this->assertInstanceOf(Salary::class, $netSalary->getSalary());
        $this->assertInstanceOf(Inss::class, $netSalary->getInss());
        $this->assertInstanceOf(Irrf::class, $netSalary->getIrrf());

        $this->assertEquals(4084.88, $netSalary->getValue());
    }
}
