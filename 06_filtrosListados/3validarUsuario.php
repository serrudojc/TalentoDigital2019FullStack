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
            <button type="submit">Entrar</button>
            <br>                  
        </form>
    </body>
</html>

<?php
/* DUDA1/2 : Veo lo siguiente cuando cargo la pagina por 1ra vez, sin ingresar datos ni tocar nada:

Notice: Undefined index: usuario in C:\xampp\htdocs\practicas\06_filtrosListados\3validarUsuario.php on line 22

Notice: Undefined index: pass in C:\xampp\htdocs\practicas\06_filtrosListados\3validarUsuario.php on line 23

Notice: Undefined variable: pass_db in C:\xampp\htdocs\practicas\06_filtrosListados\3validarUsuario.php on line 39
Contraseña incorrecta

*/

$usuario = $_GET['usuario'];
$pass_ingresada = $_GET['pass'];

$conexion = mysqli_connect("localhost","root","","tododb");
$sql = "SELECT pass FROM usuariostodo WHERE usuario = '$usuario'"; 
$respuesta_consulta = mysqli_query($conexion, $sql);

//DUDA 2/2 si ingreso un usuario inexistente, no entra aca y no me dice q no existe, pq?
//usuario: admin, pass: admin | user: alquien, pass: alguien | user: migue, pass: 123456789 
if($respuesta_consulta == false){
    die("No existe usuario");
}

while($vector_fila = mysqli_fetch_array($respuesta_consulta)){
    $pass_db = $vector_fila["pass"];
} 
//echo $pass_db;

$coinciden = password_verify("$pass_ingresada", $pass_db);
if($coinciden){
    echo "Usuario ingresado";
}else{
    echo "Contraseña incorrecta";
}

?>