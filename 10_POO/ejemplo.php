<?php

//definicion de una clase
class Telefono{
    //atributos
    public $propietario;
    public $marca;
    public $area;
    public $numero;
/*
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($unNumero){
        $this->numero = $unNumero
    }
*/
    //metodos
    public function llamar(){
        echo "Llamando !!!";

        //Supongamos, que queremos acceder desde el metodo que hago, a una de las propiedades.
        //Ej: desde el metodo, acceder a una propiedad. $this->
        echo "Llamando !!!" .$this->numero;
    }

    public function probar(){
        //si quiero usar un metodo de la misma clase
        $this->llamar();

        //si hago privada a llamar, tranquilamente puedo usar probar, pq probar es publica, 
        //pero llamar es privada, pero probar esta dentro de la misma clase
    }
}

//-----------------------------------------------------------

//creo una instancia de Telefono, creo un telefono.
$unTelefono = new Telefono;

//var_dump sirve para saber que tengo adentro de una variable
//<pre> es para que no me muestre mas ordenado. VER
echo "<pre>";
var_dump($unTelefono);
echo "</pre>";

//asigo el propietario. Para acceder usamos una flechita
$unTelefono->propietario = "Orlando";
$unTelefono->numero = "1551751308";
$unTelefono->area = "011";
$unTelefono->marca = "Motorola";
$unTelefono->llamar();
$unTelefono->probar();

echo "<pre>";
var_dump($unTelefono);
echo "</pre>";

//visibilidad:
//public : la propiedad marca al ser public, la puedo acceder desde fuera de la clase
//private: ahora no puedo acceder a las propiedades desde fuera de la clase



?>