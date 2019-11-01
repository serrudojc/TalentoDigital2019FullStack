<?php
//inicio session
session_start();

//la validacion está en un include
include 'includeValidacion.php';

$varTarea = "";
$varTipoTarea = "";

if(isset($_SESSION['tarea'])){
    $varTarea = $_SESSION['tarea'];
    echo "Existe var tarea= ".$varTarea."<br>";
}else{
    //$varTarea = "";
    echo "No existe var tarea. <br>";
}

if(isset($_SESSION['tipoTarea'])){
    $varTipoTarea = $_SESSION['tipoTarea'];
    echo "Existe var TipoTarea= ".$varTipoTarea."<br>";
}else{
    //$varTipoTarea = "";
    echo "No existe var TipoTarea. <br>";
}


?>

<html>
    <body>
        <form action="" method="GET">
            <label for="">Tareas
                <input type="text" name='tarea' value=<?php echo $varTarea;?> >
            </label>
            <select name='tipoTarea'>
                <option value="" <?php  ?> >Todas</option>
                <option value="1"<?php if($varTipoTarea==1) echo "selected='selected'"; ?> >Pendientes</option>
                <option value="2"<?php if($varTipoTarea==2) echo "selected='selected'"; ?> >Finalizas</option>
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

    //creo variables de sesion
    $_SESSION['tarea'] = $filtro;
    $_SESSION['tipoTarea'] = $filtroFin;

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
        while($registro = mysqli_fetch_array($respuesta_consulta)){
            echo $registro["id"]." | ";
            $tarea = $registro["id"];
            echo $registro["tarea"]." | ";//tuve que guardar en una variable para el href del bucle
            echo "<a href='editarT.php?id=$registro[id]'>Editar tarea</a>. | ";
            if($registro['terminada']==0){
                echo "<a href='finalizarT.php?id=$tarea'>Finalizar tarea</a> | ";
            }else{
                //echo"<br>";
            }
            echo "<a href='borrarT.php?id=$registro[id]'>Borrar tarea</a><br>";
        }
    }else{
        die("error, no hay datos");
    }
    //header("Location: filtrarListar.php?tarea=$varTarea&tipoTarea=$varTipoTarea");
}
?>