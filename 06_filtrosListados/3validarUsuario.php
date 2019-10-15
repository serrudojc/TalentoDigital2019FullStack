<html>
    <body>
        <form action="" method="GET">
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
        </form>
    </body>
</html>

<?php

if(isset($_GET["btn1"])){
    $usuario = "";
    if(isset($_GET['usuario']) == true){
        $usuario = $_GET['usuario'];
    }else{
        echo "No existe variable campo usuario.";
    }

    $pass_ingresada = "";
    if(isset($_GET['pass']) == true){
        $pass_ingresada = $_GET['pass'];
    }else{
        echo "No existe variable campo pass.";
    }
    $conexion = mysqli_connect("localhost","root","","tododb");
    $sql = "SELECT pass FROM usuariostodo WHERE usuario = '$usuario'"; 
    $respuesta_consulta = mysqli_query($conexion, $sql);

    if($respuesta_consulta == false){
        die("Falla en la respuesta a la consulta.");
    }

    if(mysqli_num_rows($respuesta_consulta)>0){
        while($vector_fila = mysqli_fetch_array($respuesta_consulta)){
            $pass_db = $vector_fila["pass"];
        }
    }else{
        die("Usuario incorrecto");
    }
    //echo $pass_db;

    $coinciden = password_verify("$pass_ingresada", $pass_db);
    if($coinciden){
        echo "Usuario ingresado";
    }else{
        echo "Contraseña incorrecta";
    }
}
?>