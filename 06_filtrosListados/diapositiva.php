<html>
    <!--CLASE 6, Formulario de filtros -->

    <form action="listado.php" method="get">
        <label for="">Filtro
            <input type="text" name="nombre" required>
        </label>
        <button type="submit">Filtrar</button>
    </form>
</html>

<?php
//Filtrar desde PHP
$filtro = "";                           //inicializco en vacio
if (isset($_GET['nombre']) == true){    //existe la variable? //verificar si existe el parametro nombre en la peticion (si viene por busqueda)
    $filtro = $_GET['nombre'];          //si existe, guardo, sino, queda vacio
}
//Se inicializa la variable $filtro con una cadena vacia
//Si viene el nombre a buscar en la peticion, se reemplaza la variable 
//filtro por lo q ingresó el usuario en el formulario


$conexion = mysqli_connect("localhost","user","pass","base de datos");

$sql = "SELECT * FROM cliente WHERE nombre LIKE ='%$filtro%' ";  //comodin= % (quiero q la palabra filtro este contenida)
$respuesta_consulta = mysqli_query($conexion, $sql);
//mostrar respuesta de la consulta
//Se realiza la consulta filtrando por el contenido de la variable $filtro
//usar  mysqli_fetch_array pq las consultas vienen como array, y luego usar un while para mostrar c/dato
?>
