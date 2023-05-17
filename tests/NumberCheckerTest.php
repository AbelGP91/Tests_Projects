
<?php

include "src/NumberChecker.php";

use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{

    public function testClassConstructor(){

        $num1 = new NumberChecker(25);
        $num2 = new NumberChecker(-24);
                
        $this->assertIsBool($num1->isEven());
        $this->assertIsBool($num1->isPositive());
        $this->assertIsBool($num2->isEven());
        $this->assertIsBool($num2->isPositive());

        $this->assertFalse($num1->IsEven());
        $this->assertTrue($num1->isPositive());
                
        $this->assertTrue($num2->IsEven());
        $this->assertFalse($num2->isPositive());

    }

}