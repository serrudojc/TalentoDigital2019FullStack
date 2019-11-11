<?php

//Herencia de objetos
//sirve para no duplicar codigo.

class Comprobante{
    public $numero;
    public $cliente;
}

class ComprobanteFactura extends Comprobante{
    //public $numero;     // duplicado, con extends lo heredo de la clase padre
    //public $cliente;    // duplicado
    public $tipo;
    public $montoTotal;
    public $iva;
}

$comp = new ComprobanteFactura();
$comp->numero = 123456;
$comp->cliente = "adadsadas";
$comp->tipo = "A";
$comp->montoTotal = 444;
$comp->iva = 21;

echo "<pre>";
var_dump($comp);
echo "</pre>";

?>