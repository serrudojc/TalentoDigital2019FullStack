<?php

//valido por la variable POST porque tengo todo en la misma pagina
//pregunto si entré por POST o no.
//Todo el codigo tiene sentido en caso de que vengamos por metodo POST,
//si meto el cod HTML y POST en un mismo archivo, lo tengo que meter
//adentro de otro if(!empty($_POST))
//esto no lo hago si tengo el html y el POST en distintos archivos.

//primero iniciamos session
session_start();

//------------------------------------------------------
//Comprobaciones
//veo tener todo lo que me esten mandando, que existan todas las cosas

if(!isset($_POST['usuario'])){
    //si no existe, no lo dejo entrar
    die();
}
//si existe, me mandaron una variable llamado "usuario"

if(!isset($_POST['clave'])){
    //si no existe, no lo dejo entrar
    die();
}
//si llego hasta aca, me mandaron las variables que me tenian que mandar
//------------------------------------------------------
//guardo en variables para no tener que escribir POST 
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

//sigo haciendo comprobaciones
if(empty($usuario)){
    die();
}
//la contraseña, depende. Algunas veces puede estar vacia.
if(empty($clave)){
    die();
}

//recien ahora, empiezo con la logica del login

//hago conexion
$conexion = mysqli_connect("localhost:3307","root","","nombreBD");

//chequeo si el usuario existe
$sql = "SELECT * FROM tablaUsuarios WHERE nombreUsuario = '$usuario'";

//la respuesta es un puntero a las cosas que me trajo la consulta
$respuesta = mysqli_query($conexion, $sql);

//hago un fetch para usar las cosas del puntero
$registro = mysqli_fetch_array($respuesta);
//en el registro, o tengo uno o no tengo nada

if(registro==NULL){
    //falló, el usuario no existe, no está registrado, redirecciono
    header("Location: registro.php");
}
//si llego aca, es pq se encontró un usuario
//No verifico al usuario pq si llegué aca, es pq el usuario ya existe, mediante la sentencia SQL

//verifico contraseña
$coincide = password_verify($clave, $registro['clave']);
if($coincide == false){
    header('Location: login.html');
}

//todo esta OK. Ahora puedo hacer la variable de session
$_SESSION['id'] = $registro['id'];

//una vez que creo la variable, armo una pantalla de menu para ver que quiero hacer
header('Location: menuLogueado.html');

?>