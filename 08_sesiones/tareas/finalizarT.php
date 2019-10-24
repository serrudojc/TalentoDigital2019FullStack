<?php
$id = $_GET["id"];
$conexion = mysqli_connect("localhost","root","","tododb");
$sql = "SELECT * FROM todo WHERE id=$id"; 
$respuesta_consulta = mysqli_query($conexion, $sql);

$registro = mysqli_fetch_array($respuesta_consulta);
if($registro == NULL){
    echo "tarea no encontrada";
    die();
}
$tarea =$registro["tarea"];
$terminada =$registro["terminada"];
$fechaLimite = $registro["fechaLimite"];
$fechaCreacion =$registro["fechaCreacion"];

?>
<html>
<form action="" method="POST">
    <label for="">Está seguro de finalizar la tarea?
    </label>
    <button type="submit" name="btn-si">Si</button>
    <button type="submit" name="btn-no">No</button>
</form>
</html>

<?php
//consultar. usé isset con los nombres de los botones por el SI o NO.
if(isset($_POST['btn-no'])){
    header("Location: editarTarea.php");
}

if(isset($_POST['btn-si'])){
    if(empty($_POST)==false){
        $id = $_GET["id"];
        $conexion = mysqli_connect("localhost","root","","tododb");
        $sql = "UPDATE todo SET terminada=1 WHERE id=$id"; 
        $respuesta_consulta = mysqli_query($conexion, $sql);
    
        if($respuesta_consulta == false){
            die("No se pudo hacer la consulta.");
        }
        echo "Registro actualizado"; //quiero mostrar esto 3 seg y luego redireccionar
        header("Location: editarTarea.php");
    }
}

?>