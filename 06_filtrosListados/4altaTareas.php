<html>
<form action="" method="POST">
    <label for="">Escribir tarea 
        <input type="text" name="tarea" required>
    </label>
    <button type="submit">Guardar</button>
</form>
</html>
<?php

//DUDA 1/3: se hacen las validaciones?
/*
if (isset($_POST['tarea'])==false){
    echo "Las variables php y html deben coincidir.";
    die();
}

if(empty($_POST['tarea'])){
    echo"el campo está vacio";
    die();
}
*/

//DUDA 2/4: para que usaria este codigo que está en la diapositiva? ("verifica si el archivo PHP fue llamao por POST")
/*
if(empty($_POST) == false){
    echo"se llamó a este archivo por post";
    die();
}
if(empty($_GET) == false){
    echo"se llamó a este archivo por get";
    die();
}
*/

/*DUDA 3/4: veo esto cuando cargo la pagina, me toma como que ya hice click en el boton "Guardar"
Notice: Undefined index: tarea in C:\xampp\htdocs\practicas\06_filtrosListados\4altaTareas.php on line 40
Se ingresaron espacios en blanco
*/
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

//DUDA 4/4: duda con este if. Me parece que nunca entro en el mismo, por lo visto en otros ejercicios.
if($respuesta_consulta == false){
    die("No se pudo ingresar el registro en la base de datos");
}
echo "Registro ingresado ;-)";

?>