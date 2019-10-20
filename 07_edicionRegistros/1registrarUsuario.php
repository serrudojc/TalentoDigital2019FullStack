<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registracion</title>
</head>

<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="">Nombre completo</td>
                <td><input type="text" name="nombre" placeholder="Nombre completo"></label></td>
            </tr>
            <br>
            <tr>
                <td><label for="">                  
                        Nombre de usuario</td>
                <td><input type="text" name="usuario" placeholder="Usuario">
                    </label></td>
            </tr>
            <br>
            <tr>
                <td><label for="">
                        Contraseña</td>
                <td><input type="password" name="pass" placeholder="Contraseña">
                    </label></td>
            </tr>
            <br>
            <tr>
                <td><label for="">
                        E-mail</td>
                <td><input type="text" name="email" placeholder="E-mail">
                    </label></td>
            </tr>
            <br>
            <tr>
                <td><button type="submit">Enviar</button></td>
            </tr>
        </table>
    </form>
</body>

</html>


<?php
//-------------------------validacion----------------------------

if(empty($_POST)==false){
    $mensajeError = "";

        if(isset($_POST['nombre']) == false) {
            $mensajeError .=" variables nombre no coinciden<br/>";
        }

        if(empty($_POST['nombre']) == true) {
            $mensajeError .=" me mandaste un nombre vacio<br/>";
        }

        if(isset($_POST['usuario']) == false) {
            $mensajeError .= " variables usuario no coinciden<br/>";
        }

        if(empty($_POST['usuario']) == true) {
            $mensajeError .= " me mandaste un usuario vacio<br/>";
        }

        if(isset($_POST['pass']) == false) {
            $mensajeError .= " variables pass no coinciden<br/>";
        }

        if(empty($_POST['pass']) == true) {
            $mensajeError .= " me mandaste una pass vacia<br/>";
        }

        if(isset($_POST['email']) == false) {
            $mensajeError .= " variables email no coinciden<br/>";
        }

        if(empty($_POST['email']) == true) {
            $mensajeError .= " me mandaste un email vacio<br/>";
        }

        if(empty($mensajeError) == false) {
            echo $mensajeError;
            die();
        }

        //------------------------------------------------------------
    //cargo variables y verifico que no sean espacios vacios

        $nombre =	trim($_POST['nombre']);
        $usuario =	trim($_POST['usuario']);
        $pass =		trim($_POST['pass']);
        $email =	trim($_POST['email']);

        $lenNombre = strlen($nombre);
        $lenUsuario = strlen($usuario);
        $lenPass = strlen($pass);
        $lenEmail = strlen($email);

        if($lenNombre == 0 || $lenUsuario == 0 || $lenPass == 0 || $lenEmail ==0){
            echo "Los datos no pueden ser espacios en blanco.";
            die();
        } 
        //--------------------------------------------------------------
        //encripto contraseña
        $pass_encriptado = password_hash("$pass", PASSWORD_BCRYPT);

        //--------------------------------------------------------------
        //agrego fecha de registración
        $fechaRegistro = date("Y-m-d");
        echo "$fechaRegistro";

        //--------------------------------------------------------------
        //Ahora deberia enviar a la base de datos

        $conexion = mysqli_connect("localhost:3306", "root", "", "tododb");
        $sql = "INSERT INTO usuariostodo (nombre, usuario, pass, email, fechaRegistro) VALUES ('$nombre','$usuario','$pass_encriptado','$email','$fechaRegistro')";

        $respuesta_consulta = mysqli_query($conexion, $sql);
        if($respuesta_consulta == false){
            die("No se pudo ingresar el registro en la base de datos");
        }
        echo "<br>";
        echo "Registro ingresado ;-)";
}
?>