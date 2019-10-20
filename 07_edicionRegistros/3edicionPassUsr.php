<html>
    <body>
        <form action="" method="GET">       
            <label for="">Usuario
                <input type="text" name='usuario'>
            </label>
            <br>
            <button type="submit">Filtrar</button>
            <br>                  
        </form>
    </body>
</html>

<?php

if(empty($_GET) == false){
    $usuario = $_GET['usuario'];
    $conexion = mysqli_connect("localhost","root","","tododb");
    $sql = "SELECT * FROM usuariostodo WHERE usuario LIKE '%$usuario%'"; 
    $respuesta_consulta = mysqli_query($conexion, $sql);

    if($respuesta_consulta == false){
        die("No se pudo procesar la consulta.");
    }

    echo"<table border=1>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>email</th>
                <th>Fecha de registro</th>
            </tr>";
    if(mysqli_num_rows($respuesta_consulta)>0){
        while($registro = mysqli_fetch_array($respuesta_consulta)){
            $id=$registro["id"];
            $nombre=$registro["nombre"];
            $usuario=$registro["usuario"];
            $email=$registro["email"];
            $fechaRegistro=$registro["fechaRegistro"];
            echo"<tr>
                <td>$id</td>
                <td>$nombre</td>
                <td>$usuario</td>
                <td>$email</td>
                <td>$fechaRegistro</td>
                <td><a href='3editar.php?id=$registro[id]'>Cambiar contraseña</a><br></td>
            </tr>";
        }
        echo "</table>";
    }else{
        die("No existe el usuario.");
    }    
}
?>
