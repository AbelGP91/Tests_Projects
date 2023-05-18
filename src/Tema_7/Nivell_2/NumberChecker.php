<?php

class NumberChecker  {

	public function __construct(private int $number){

		
    }

	public function isEven(): string {

		if ($this->number%2 == 0){

			return "El nombre és parell";

		}

		else {

			return "El nombre és senar";

		}

	}
    
	public function isPositive(): string {

		if ($this->number > 0){

			return "El nombre és positiu"; 

		}

		else {

			return "El nombre és negatiu";

		}
	}

}

$num1 = new NumberChecker(-24);
$num2 = new NumberChecker(25);

echo ($num1->isEven()) . "<br>";
echo ($num1->isPositive()) . "<br>";

echo ($num2->isEven()) . "<br>";
echo ($num2->isPositive());

?>