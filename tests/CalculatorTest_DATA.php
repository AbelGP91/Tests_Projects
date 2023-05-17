
<?php

require 'src/Calculator.php';

use PHPUnit\Framework\TestCase;

final class CalculatorTest_DATA extends TestCase{

    private $calculator;
 
    public function setUp(): void{

        $this->calculator = new Calculator();

    }
 
    protected function tearDown(): void {

        $this->calculator = NULL;

    }

    public function addDataProvider(){

        return array(

            array(1,2,3),
            array(0,0,0),
            array(-1,-1,-2),

        );

    }
 
    /**
     * @dataProvider addDataProvider
     */

    public function testAdd($a, $b, $expected){

        $result = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $result);

    }
    
}

?>