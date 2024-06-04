<?php 

namespace App\Tests\Unit\Entity\ExpenseTypeTest;

use PHPUnit\Framework\TestCase;
use App\Entity\ExpenseType;

class ExpenseTypeTest extends TestCase {

    public function testItCanSetAndGetExpenseType(): void {
        $expenseType = new ExpenseType(); 
        $expenseType->setExpenseTypeName("Hobby"); 
        $this->assertEquals("Hobby", $expenseType->getExpenseTypeName());
    }
}