
<?php

include "src/Tema_7/Nivell_2/NumberChecker.php";

use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase{

    public function ClassConstructorProvider(){

        return [

            [25,"El nombre és senar", "El nombre és positiu"],
            [-24,"El nombre és parell", "El nombre és negatiu"],
            [26, "El nombre és parell", "El nombre és positiu"],
            [-27, "El nombre és senar", "El nombre és negatiu"]          

        ];    
        
    }
        
    /**
     * @dataProvider ClassConstructorProvider
     */
        
    public function testClassConstructor($valor,$div2,$signe){

        $num1 = new NumberChecker($valor);

        $this->assertIsString($num1->isEven());
        $this->assertIsString($num1->isPositive());

        $this->assertEqualsIgnoringCase($div2,$num1->isEven());
        $this->assertEqualsIgnoringCase($signe,$num1->isPositive());
                 
        
    }

}