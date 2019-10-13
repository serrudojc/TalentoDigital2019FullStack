<html>
    <body>
        <form action="" method="GET">
            <label for="">Filtro
                <input type="text" name='tarea'>
            </label>
            <button type="submit">Filtrar</button>
        </form>
    </body>
</html>

<?php

//DUDA 1/2: al ir al nevegador, ya me muestra por defecto todas las tareas. Por que? 
//Solo quiero verlas si no ingreso ningun valor en el campo filtro y hago click en Filtrar 

$filtro = "";                           //inicializo en vacio
if (isset($_GET['tarea']) == true){     //existe?
    $filtro = $_GET['tarea'];           //si existe, guardo, sino, queda vacio
}

$conexion = mysqli_connect("localhost","root","","tododb");
$sql = "SELECT * FROM todo WHERE tarea LIKE '%$filtro%' ";  //comodin= % (quiero q la palabra filtro este contenida)

$respuesta_consulta = mysqli_query($conexion, $sql);

//DUDA 2/2: Creo que nunca entro aca, si ingreso una tarea que no existe no me muestra "No hay datos"
if($respuesta_consulta == false){
    die("No hay datos");
}

while($vector_fila = mysqli_fetch_array($respuesta_consulta)){
    echo $vector_fila["id"];
    echo " | ";
    echo $vector_fila["tarea"];
    echo "<br>";
}

//----------------------------------------------------------
/*    
if(mysqli_num_rows($respuesta_consulta)>0){
    while($fila = mysqli_fetch_assoc($respuesta_consulta)){
        echo $fila["id"];
        echo $fila["tarea"];
    }
}else{
    die("error, no hay datos");
}
*/
?>