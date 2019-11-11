<?php
//uso de excepciones

try{
    mysqli_report(MYSQLI_REPORT_STRICT);
    echo "Paso por 1 <br>";
    //hago la conexion orientado a objetos, no como antes.
    $conexion = new mysqli("localhost", "root", "", "allaslada");
    echo "paso por 2 <br>";

}catch (Exception $e){
    //echo "paso por un error <br>";
    //echo $e->getMessage();
    //echo $e->getCode();
    echo $e->getTraceAsString();
}

?>