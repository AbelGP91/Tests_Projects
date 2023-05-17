<?php

class NumberChecker  {

	public function __construct(private int $number){

    }

	public function isEven(): bool {

		return $this->number%2 == 0;

	}
    
	public function isPositive(): bool {

		return $this->number > 0;

	}

}

$num = new NumberChecker(25);
var_dump ($num->isEven()) . "<br>";
var_dump ($num->isPositive());

?>