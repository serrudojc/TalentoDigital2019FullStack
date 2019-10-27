<html>
    <body>
        <form method="POST">
            <p>
                <label for="">Usuario
                <input type="text" name='usuario'>
                </label>
            </p>
            <p>
                <label for="">Contraseña
                <input type="password" name='pass'>
                </label>
            </p>
            <button type="submit" name="btn1">Entrar</button>
            <br>
            <a href='registracion.php'>Registrarse<a>                  
        </form>
    </body>
</html>

<?php

//valido por la variable POST porque tengo todo en la misma pagina
//pregunto si entré por POST o no.
//Todo el codigo tiene sentido en caso de que vengamos por metodo POST,
//si meto el cod HTML y POST en un mismo archivo, lo tengo que meter
//adentro de otro if(!empty($_POST))

if(!empty($_POST)){
    //inicio session
    session_start();

    //validaciones
    if(!isset($_POST['usuario'])){
        die("no coincide la variable");
    }
    if(!isset($_POST['pass'])){
        die("no coincide la variable");
    }
    $usuario = $_POST['usuario'];
    $pass_ingresada = $_POST['pass'];    

    //-----------------------------------------------------
    
    $conexion = mysqli_connect("localhost","root","","tododb");
    $sql = "SELECT * FROM usuariostodo WHERE usuario = '$usuario'"; 
    $respuesta_consulta = mysqli_query($conexion, $sql);
    $vector_fila = mysqli_fetch_array($respuesta_consulta);

    if($vector_fila == false){
        die("No existe usuario.");
    }

    $coinciden = password_verify("$pass_ingresada", $vector_fila['pass']);
    if($coinciden){
        echo "Usuario ingresado";

        //creo variable session y redirecciono
        $_SESSION['id']=$vector_fila["id"];
        echo $vector_fila['id'];
        header("Location: menu.php");

        
    }else{
        die("Contraseña incorrecta");
    }
}
?>