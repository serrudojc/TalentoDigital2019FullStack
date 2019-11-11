<?php
//inicio session
session_start();

//la validacion está en un include
include 'includeValidacion.php';
$filtro = ""; 
$filtroFin = "";

if(empty($_GET) == false){
    //Inicializo el filtro por tarea en vacio y pregunto si existe
    //$filtro = "";   
    if (isset($_GET['tarea']) == true){    
        $filtro = $_GET['tarea'];  
    }

    //Inicializo la selección por tipo de tarea en vacio
    //$filtroFin = "";
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
}
?>

<html>
    <head></head>
    <body>
        <h1>Listar Tareas</h1>
        <form method="GET">
            <label for="">Tareas
                <input type="text" name='tarea' value="<?php echo $filtro ?>" >
            </label>
            <select name='tipoTarea'>
                <option value="" <?php ?> >Todas</option>
                <option value="1" <?php if($filtroFin == 1) echo "selected";?> >Pendientes</option>
                <option value="2" <?php if($filtroFin == 2) echo "selected";?>>Finalizadas</option>
            </select> 
            <br>
            <p><button type="submit">:: Filtrar ::</button></p>
            <p><a href='altaTareas.php'>Alta Tarea</a></p>
            <p>
            <a href='menu.php'>Menú</a><br>
            <a href='logout.php'>Salir</a><br>
            </p>                  
        </form>
    </body>
</html>

<?php
if(empty($_GET) == false){
    
    if(mysqli_num_rows($respuesta_consulta)>0){
        echo" <table>
        <tr>
            <th> id </th>
            <th> Nombre </th>
            <th> Editar </th>
            <th> Finalizar </th>
            <th> Borrar </th>
        </tr>";
        while($registro = mysqli_fetch_array($respuesta_consulta)){
            $id = $registro['id'];
            $tarea = $registro['tarea'];
            echo "
            <tr>
                <td>$id</td>
                <td>$tarea</td>
                <td><a href='editarT.php?id=$id'>Editar</a></td>
                <td>";
                if($registro['terminada']==0){
                    echo "<a href='finalizarT.php?id=$id'>Finalizar</a>";
                }
            echo"</td>
                <td><a href='borrarT.php?id=$id'>Borrar</a></br></td>
            </tr>
            ";
        }
        echo"  </table>";
    }else{
        die("error, no hay datos");
    }
}
?>
  
