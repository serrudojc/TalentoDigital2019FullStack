<?php

class Operaciones{

    public function sumar($a, $b){
        return $a + $b;
    }
    
    public function restar($a, $b){
        return $a - $b;
    }

    public function multiplicar($a, $b){
        return $a * $b;
    }

    public function dividir($a, $b){
        if($b == 0){
            die("No se puede dividir por cero");
        }
        return $a / $b;
    }
}

$calculadora = new Operaciones();

echo $calculadora->sumar(10,2);
echo "<br>";
echo $calculadora->restar(22,4);
echo "<br>";
echo $calculadora->multiplicar(4,4);
echo "<br>";
echo $calculadora->dividir(4,0);



?>