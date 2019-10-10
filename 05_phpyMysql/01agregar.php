
<?php

//validacion
if (isset($_POST['tarea'])==false){
    echo "Las variables php y html deben coincidir.";
    die();
}
//En el frontend me puede mostrar que rellene el campo, pero yo tengo
//que asegurarme que no esté vacia de todas formas
//"si yo delego algo, si el otro lo hace mal, el responsable soy yo"
if(empty($_POST['tarea'])){
    echo"el campo está vacio";
    die();
}
/*
if (isset($_POST['laFecha'])==false){
    echo "Las variables php y html deben coincidir.";
    die();
}

if(empty($_POST['laFecha'])){
    echo"el campo fecha está vacio";
    die();
}
*/

$tarea = trim($_POST['tarea']);
//$fecha = $_POST['laFecha'];
$lenTarea = strlen($tarea);
if($lenTarea == 0){
    echo "Se ingresaron espacios en blanco";
    die();
}

$fechaActual = date("Y/m/d");

$conexion = mysqli_connect("localhost", "root", "", "tododb");
//$sql = "insert into todo (tarea, fecha,fechaCreacion) values ('$tarea', '$fecha','$fechaActual')";
$sql = "insert into todo (tarea, fechaCreacion) values ('$tarea','$fechaActual')";

$respuesta_consulta = mysqli_query($conexion, $sql);
if($respuesta_consulta == false){
    die("No se pudo ingresar el registro en la base de datos");
}
echo "Registro ingresado ;-)";

?>