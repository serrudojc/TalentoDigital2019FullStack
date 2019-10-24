<?php

$id = $_GET["id"];
$conexion = mysqli_connect("localhost","root","","tododb");
$sql = "SELECT * FROM usuariostodo WHERE id=$id"; 
$respuesta_consulta = mysqli_query($conexion, $sql);

$registro = mysqli_fetch_array($respuesta_consulta);
if($registro == NULL){
    echo "Usuario no encontrado";
    die();
}
?>

<html>
<form action="" method="POST">
    <label for="">Cambiar password
        <input type="password" name="pass" value="<?php echo $pass;?>">
    </label>
    <button type="submit">Cambiar</button>
</form>
</html>

<?php
if(empty($_POST)==false){
    $id = $_GET["id"];
    
    $pass = $_POST["pass"];
    $pass_encriptado = password_hash("$pass", PASSWORD_BCRYPT);

    $conexion = mysqli_connect("localhost","root","","tododb");
    $sql = "UPDATE usuariostodo SET pass='$pass_encriptado' WHERE id=$id"; 
    $respuesta_consulta = mysqli_query($conexion, $sql);

    if($respuesta_consulta == false){
        die("No se pudo hacer la consulta.");
    }
    echo "Contraseña cambiada.";
    header("Location: http://localhost/practicas/08_sesiones/usuarios/3edicionPassUsr.php");
}
?>