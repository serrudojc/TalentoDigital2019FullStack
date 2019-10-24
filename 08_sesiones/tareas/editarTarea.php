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
            <p><button type="submit">:: Filtrar ::</button></p>
            <p><a href='altaTareas.php'>Alta Tarea</a></p>
            <p>
            <a href='http://localhost/practicas/08_sesiones/usuarios/menu.html'>Menú</a><br>
            <a href='http://localhost/practicas/08_sesiones/usuarios/logout.php'>Salir</a><br>
            </p>                  
        </form>
    </body>
</html>

<?php
//inicio session
session_start();
//echo $_SESSION['id'];

if(isset($_SESSION['id'])==false){
    header("Location: : http://localhost/jc/08_sesiones/usuarios/validarUsuario.php");
}


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
        while($registro = mysqli_fetch_array($respuesta_consulta)){
            echo $registro["id"]." | ";
            $tarea = $registro["id"];
            echo $registro["tarea"]." | ";//tuve que guardar en una variable para el href del bucle
            echo "<a href='editarT.php?id=$registro[id]'>Editar tarea</a>. | ";
            if($registro['terminada']==0){
                //echo "<a href='finalizarT.php?id=$registro[id]'>Finalizar tarea</a><br>";
                echo "<a href='finalizarT.php?id=$tarea'>Finalizar tarea</a><br>";
            }else{
                echo"<br>";
            }
        }
    }else{
        die("error, no hay datos");
    }    
}
?>