<?php

//inicio session
session_start();

//la validacion está en un include
include 'includeValidacion.php';

$id = $_GET["id"];
$conexion = mysqli_connect("localhost","root","","tododb");
$sql = "SELECT * FROM todo WHERE id=$id"; 
$respuesta_consulta = mysqli_query($conexion, $sql);

$registro = mysqli_fetch_array($respuesta_consulta);
if($registro == NULL){
    echo "Contacto no encontrado";
    die();
}
$tarea =$registro["tarea"];
$terminada =$registro["terminada"];
$fechaLimite = $registro["fechaLimite"];
$fechaCreacion =$registro["fechaCreacion"];

?>
<html>
<form action="" method="POST">
    <label for="">Tarea a editar
        <input type="text" name="tarea" value="<?php echo $tarea;?>">
    </label>
    <button type="submit">Guardar</button>
</form>
</html>

<?php
if(empty($_POST)==false){
    $fechaActual = date("Y/m/d");
    $id = $_GET["id"];
    $tarea = $_POST["tarea"];
    $conexion = mysqli_connect("localhost","root","","tododb");
    $sql = "UPDATE todo SET tarea='$tarea', fechaCreacion='$fechaActual' WHERE id=$id"; 
    $respuesta_consulta = mysqli_query($conexion, $sql);

    if($respuesta_consulta == false){
        die("No se pudo hacer la consulta.");
    }
    echo "Registro actualizado";
    header ("Location: filtrarListar.php?filtroFin=$_SESSION[tipoTarea]");
}
?>