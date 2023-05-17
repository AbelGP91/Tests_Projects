
<?php

include "src/Tema_7/Nivell_1/CalcularNota.php";

use PHPUnit\Framework\TestCase;

final class CalcularNotaTest extends TestCase{


    public function ClassConstructorProvider(){

        return [

            [60],
            [50],
            [40],
            [30]

        ];   

    }


/**
 * @dataProvider ClassConstructorProvider
 */
    
    public function testClassConstructor($dataProvider){
   
        $nota = new CalcularNota($dataProvider);
                
        // if ($nota>=60){

            $this->assertGreaterThanOrEqual(60,$nota->notes());
            $this->assertEqualsIgnoringCase("L'alumne és de Primera Divisió",$nota->notes());

            $this->assertGreaterThanOrEqual(50,$nota->notes());
            $this->assertEqualsIgnoringCase("L'alumne és de Segona Divisió",$nota->notes());

            $this->assertGreaterThanOrEqual(40,$nota->notes());
            $this->assertEqualsIgnoringCase("L'alumne és de Tercera Divisió",$nota->notes());

            $this->assertGreaterThanOrEqual(30,$nota->notes());
            $this->assertEqualsIgnoringCase("L'alumne ha de recuperar",$nota->notes());


        // }
        
    }

    
    

          


}



    
