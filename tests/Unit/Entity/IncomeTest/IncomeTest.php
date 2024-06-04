<?php 

namespace App\Tests\Unit\Entity\IncomeTest;

use PHPUnit\Framework\TestCase;
use App\Entity\Income;
use App\Entity\User;
use App\Entity\IncomeType;

class IncomeTest extends TestCase {
    
    public function testItCanSetAndGetIncome(): void {
        
        $income = new Income(); 
        $user = new User();
        $incomeType = new IncomeType();

        // user obj
        $user->setEmail('testowyAdresEmail@gmail.com'); 
        $user->setRoles(['ROLE_USER']);
        $user->setPassword('testoweHaslo');

        // income type obj 
        $incomeType->setIncomeTypeName('Salary');

        // income obj 
        $income->setIncomeUser($user);
        $income->setIncomeType($incomeType);
        $income->setIncomeName('WIP Salary');
        $income->setIncomeValue(1_000_000);
        $income->setCreatedAt(new \DateTimeImmutable('2021-10-10'));
    
        $this->assertEquals($user, $income->getIncomeUser());
        $this->assertEquals($incomeType, $income->getIncomeType());
        $this->assertEquals('WIP Salary', $income->getIncomeName());
        $this->assertEquals(1_000_000, $income->getIncomeValue());
        $this->assertEquals(new \DateTimeImmutable('2021-10-10'), $income->getCreatedAt());
    }
    
}