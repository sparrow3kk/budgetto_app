<?php 

namespace App\Tests\Unit\Entity\IncomeTypeTest;

use PHPUnit\Framework\TestCase;
use App\Entity\IncomeType;

class IncomeTypeTest extends TestCase {

    public function testItCanSetAndGetIncomeType(): void {
        $incomeType = new IncomeType(); 
        $incomeType->setIncomeTypeName('Salary'); 
        $this->assertEquals('Salary', $incomeType->getIncomeTypeName());
    }
    
}