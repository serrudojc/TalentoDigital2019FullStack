<html>
<form method="POST">
    <label for="">Escribir tarea 
        <input type="text" name="tarea" required>
    </label>
    <label for="">Fecha Límite
    <input type="date" name="fechaLimite">
    </label>
    <button type="submit">:: Añadir tarea ::</button>
</form>
</html>


<?php
//consulto por POST
if(!empty($_POST)){
    
    if (isset($_POST['tarea'])==false){
        echo "Las variables php y html deben coincidir.";
        die();
    }
    if(empty($_POST['tarea'])){
        echo"el campo está vacio";
        die();
    }
    
    if (isset($_POST['fechaLimite'])==false){
        echo "Las variables php y html deben coincidir.";
        die();
    }

    $tarea = trim($_POST['tarea']);
    $fechaLimite =$_POST['fechaLimite'];
    $lenTarea = strlen($tarea);
    if($lenTarea == 0){
        echo "Se ingresaron espacios en blanco";
        die();
    }

    $fechaActual = date("Y-m-d");

    $conexion = mysqli_connect("localhost", "root", "", "tododb");
    $sql = "insert into todo (tarea,fechaLimite,fechaCreacion) values ('$tarea', '$fechaLimite','$fechaActual')";

    $respuesta_consulta = mysqli_query($conexion, $sql);
    if($respuesta_consulta == false){
        die("No se pudo ingresar el registro en la base de datos");
    }
    echo "Registro ingresado ;-)";
}
?>
