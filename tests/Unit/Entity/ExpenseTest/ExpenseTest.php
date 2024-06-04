<?php 

namespace App\Tests\Unit\Entity\ExpenseTest;

use PHPUnit\Framework\TestCase;
use App\Entity\Expense;
use App\Entity\User;
use App\Entity\ExpenseType;

class ExpenseTest extends TestCase {

    public function testItCanSetAndGetExpense(): void {
        
        $expense = new Expense(); 
        $user = new User();
        $expenseType = new ExpenseType();

        // user obj
        $user->setEmail('testTested@gmail.com');
        $user->setRoles(['ROLE_USER']);

        // expense type obj
        $expenseType->setExpenseTypeName('Hobby');

        // expense obj
        $expense->setExpenseUser($user);
        $expense->setExpenseType($expenseType);
        $expense->setExpenseName('WIP Hobby');
        $expense->setExpenseValue(150);
        $expense->setCreatedAt(new \DateTimeImmutable('2021-10-10'));

        $this->assertEquals($user, $expense->getExpenseUser());
        $this->assertEquals($expenseType, $expense->getExpenseType());
        $this->assertEquals('WIP Hobby', $expense->getExpenseName());
        $this->assertEquals(150, $expense->getExpenseValue());
        $this->assertEquals(new \DateTimeImmutable('2021-10-10'), $expense->getCreatedAt());
    }
}