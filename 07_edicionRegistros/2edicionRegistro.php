<html>
    <body>
        <form action="" method="GET">
            
            <label for="">Tareas
                <input type="text" name='tarea'>
            </label>

            <select name='tipoTarea'>
                <option value="">Todas</option>
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

if(empty($_GET) == false){
    //Inicializo el filtro por tarea en vacio y pregunto si existe
$filtro = "";   
if (isset($_GET['tarea']) == true){    
    $filtro = $_GET['tarea'];  
}

//Inicializo la selección por tipo de tarea en vacio
$filtroFin = "";
if (isset($_GET['tipoTarea']) == true){    
    $filtroFin = $_GET['tipoTarea'];  
}

//siempre viene como char. (terminada es una campo de la DB)
if($filtroFin == "1")
    $filtroFin = " AND terminada = 0";

if($filtroFin == "2")
    $filtroFin = " AND terminada = 1";


$conexion = mysqli_connect("localhost","root","","tododb");
$sql = "SELECT * FROM todo WHERE tarea LIKE '%$filtro%'$filtroFin "; 
$respuesta_consulta = mysqli_query($conexion, $sql);

if($respuesta_consulta == false){
    die("No se pudo procesar la consulta.");
}

if(mysqli_num_rows($respuesta_consulta)>0){
    while($registro = mysqli_fetch_assoc($respuesta_consulta)){
        echo $registro["id"]." | ";
        echo $registro["tarea"]." | ";
        echo "<a href='2editar.php?id=$registro[id]'>Editar</a><br>";
    }
}else{
    die("error, no hay datos");
}    
}



?>