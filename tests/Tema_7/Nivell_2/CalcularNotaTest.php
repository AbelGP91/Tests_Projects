
<?php

include "src/Tema_7/Nivell_1/CalcularNota.php";

use PHPUnit\Framework\TestCase;

final class CalcularNotaTest extends TestCase{

    public function ClassConstructorProvider(){

        return [

            [60, "L'alumne és de Primera Divisió"],
            [45, "L'alumne és de Segona Divisió"],
            [33, "L'alumne és de Tercera Divisió"],
            [20, "L'alumne ha de recuperar"]

        ];   

    }


/**
 * @dataProvider ClassConstructorProvider
 */
    
    public function testClassConstructor($valor,$divisio){
   
        $nota = new CalcularNota($valor);             
            
            $this->assertEqualsIgnoringCase($divisio,$nota->notes());          
       
        
    }

    
    

          


}



    
