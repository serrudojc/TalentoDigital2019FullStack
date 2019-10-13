<html>
    <body>
        <form action="" method="GET">
            
            <label for="">Tareas
                <input type="text" name='tarea'>
            </label>

            <select name='tipoTarea'>
                <option value="0">Todas</option>
                <option value="1">Pendientes</option>
                <option value="2">Finalizas</option>
            </select> 
            <br>
            <button type="submit">Filtrar</button>
            <br>                  
        </form>
    </body>
</html>

<?php

//DUDAS:
// 1- como se hacen las validaciones?

// 2 - url http://localhost/practicas/06_filtrosListados/2filtro.php
// me tira : "Notice: Undefined index", error linea 43, cuando no hay ninguna seleccion (notar que la url no tiene las selecciones)
// http://localhost/practicas/06_filtrosListados/2filtro.php?tarea=&tipoTarea=0
// http://localhost/practicas/06_filtrosListados/2filtro.php?tarea=&tipoTarea=1
// http://localhost/practicas/06_filtrosListados/2filtro.php?tarea=&tipoTarea=2

//3- cuando ingreso a http://localhost/practicas/06_filtrosListados/2filtro.php
// además del "notice", me muestra todas las tareas por defecto. No quiero verlas a menos que toque "Filtrar"


//Inicializo el filtro por tarea en vacio y pregunto si existe
$filtro = "";   
if (isset($_GET['tarea']) == true){    
    $filtro = $_GET['tarea'];  
}

//Inicializo la selección por tipo de tarea en vacio
$tipoTarea=$_GET['tipoTarea'];
$filtroFin = "";

//siempre viene como char. (terminada es una campo de la DB)
if($tipoTarea == "1")
    $filtroFin = " AND terminada = 0";

if($tipoTarea == "2")
    $filtroFin = " AND terminada = 1";


$conexion = mysqli_connect("localhost","root","","tododb");
$sql = "SELECT * FROM todo WHERE tarea LIKE '%$filtro%'$filtroFin "; 
//echo "$sql"; echo'<br>';
$respuesta_consulta = mysqli_query($conexion, $sql);

//DUDA 4: no entro aca, cuando elijo una tarea que no existe.
if($respuesta_consulta == false){
    die("No hay datos");
}

while($vector_fila = mysqli_fetch_array($respuesta_consulta)){
    echo $vector_fila["id"];
    echo " | ";
    echo $vector_fila["tarea"];
    echo "<br>";
}

?>