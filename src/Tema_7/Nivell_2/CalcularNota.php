
<?php

$nota1 = new CalcularNota (60);
$nota2 = new CalcularNota (50);
$nota3 = new CalcularNota (40);
$nota4 = new CalcularNota (30);

echo $nota1->notes() . "<br>";
echo $nota2->notes() . "<br>";
echo $nota3->notes() . "<br>";
echo $nota4->notes() . "<br>";

class CalcularNota{

    public function __construct(private int $nota){

        $this->nota = $nota;
    
    }
   
    function notes(): string{

        $llindar = 100;

        $notaFinal = ($this->nota/$llindar)*100;
    
        if ($notaFinal >= 60){
    
            return "L'alumne és de Primera Divisió";
    
        }
    
        else if ($notaFinal>=45) {
            
            return "L'alumne és de Segona Divisió";
    
        } 
        
        else if ($notaFinal>=33) {
    
            return "L'alumne és de Tercera Divisió";
        }
    
        else {
    
            return "L'alumne ha de recuperar";
    
        }

    }

}