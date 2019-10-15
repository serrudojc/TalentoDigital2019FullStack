<html>
<form action="" method="POST">
    <label for="">Escribir tarea 
        <input type="text" name="tarea" required>
    </label>
    <button type="submit" name = "btn1">Guardar</button>
</form>
</html>
<?php
if(isset($_POST["btn1"])){
    if(empty($_POST) == false){
        echo"se llamó a este archivo por POST"; echo"<br>";
    }
    $tarea = trim($_POST['tarea']);

    $lenTarea = strlen($tarea);
    if($lenTarea == 0){
        echo "Se ingresaron espacios en blanco";
        die();
    }

    $fechaActual = date("Y-m-d");

    $conexion = mysqli_connect("localhost", "root", "", "tododb");
    $sql = "insert into todo (tarea, fechaCreacion) values ('$tarea','$fechaActual')";
    $respuesta_consulta = mysqli_query($conexion, $sql);

    if($respuesta_consulta == false){
        die("No se pudo hacer la consulta.");
    }
    echo "Registro ingresado ;-)";
}
//------------------------------------------------------------------------------------------
if(isset($_GET["btn1"])){
    if(empty($_GET) == false){
        echo"se llamó a este archivo por GET"; echo"<br>";
    }
    $tarea = trim($_GET['tarea']);

    $lenTarea = strlen($tarea);
    if($lenTarea == 0){
        echo "Se ingresaron espacios en blanco";
        die();
    }

    $fechaActual = date("Y-m-d");

    $conexion = mysqli_connect("localhost", "root", "", "tododb");
    $sql = "insert into todo (tarea, fechaCreacion) values ('$tarea','$fechaActual')";
    $respuesta_consulta = mysqli_query($conexion, $sql);

    if($respuesta_consulta == false){
        die("No se pudo hacer la consulta.");
    }
    echo "Registro ingresado ;-)";
}
?>