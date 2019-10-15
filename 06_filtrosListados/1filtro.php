<html>
    <body>
        <form action="" method="GET">
            <label for="">Filtro
                <input type="text" name='tarea'>
            </label>
            <button type="submit" name="btn1">Filtrar</button>
        </form>
    </body>
</html>

<?php

//DUDA 1/2: al ir al nevegador, ya me muestra por defecto todas las tareas. Por que? 
//Solo quiero verlas si no ingreso ningun valor en el campo filtro y hago click en Filtrar 
/*Orlando:
1. El código del while se ejecuta SIEMPRE, por lo que independientemente que haya algo o no 
seleccionado en el filtro, se muestra
Solucion= pongo todo dentro de un if. Si toqué el botón, realizo. Consultar.
*/

$filtro = "";                           //inicializo en vacio
if (isset($_GET['tarea']) == true){     //existe?
    $filtro = $_GET['tarea'];           //si existe, guardo, sino, queda vacio
}

if(isset($_GET['btn1'])){
    $conexion = mysqli_connect("localhost","root","","tododb");
    $sql = "SELECT * FROM todo WHERE tarea LIKE '%$filtro%' ";  //comodin= % (quiero q la palabra filtro este contenida)

    $respuesta_consulta = mysqli_query($conexion, $sql);

    if($respuesta_consulta == false){
        die("No se puedo realizar la consulta.");
    }

    //----------------------------------------------------------
    //con mysqli_num_rows cuento la cantidad de registros que tuve como resultado.    
    if(mysqli_num_rows($respuesta_consulta)>0){
        while($vector_fila = mysqli_fetch_assoc($respuesta_consulta)){
            echo $vector_fila["id"];
            echo " | ";
            echo $vector_fila["tarea"];
            echo "<br>";
        }
    }else{
        die("error, no hay datos");
    }

}

//------------------------------------------------------------------------------------------------
/*
mysqli_fetch_assoc
This function will return a row as an associative array where the column names will be 
the keys storing corresponding value. eg

    <?php
    	include('connection.php');
    	$query=mysqli_query("connection_name","select * from tb");
    	$row=mysqli_fetch_assoc($query);
    	echo $row['id'];
    	echo $row['username'];
    	echo $row['password'];
    ?>

mysqli_fetch_row
This function will return a row where the values will come in the order as they are defined 
in the SQL query, and the keys will span from 0 to one less than the number of columns selected.

    <?php
    include('connection.php');
    $query=mysqli_query("connection_name","select * from tb");
    $row=mysqli_fetch_row($query);
    echo $row[0];
    echo $row[1];
    echo $row[2];
    ?>

mysqli_fetch_array
This function will actually return an array with both the contents of mysql_fetch_row and 
mysql_fetch_assoc merged into one. It will both have numeric and string keys which will let
 you access your data in whatever way you'd find easiest.

    <?php
    include('connection.php');
    $query=mysqli_query("connection_name","select * from tb");
    $row=mysqli_fetch_array($query);
    echo $row['id'];
    echo $row['username'];
    echo $row['password'];
   
    // You can access it by index as well as by name
     
    echo $row[0];
    echo $row[1];
    echo $row[2];     
    ?>
 */ 

?>