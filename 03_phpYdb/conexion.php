<?php

$conexion = mysqli_connect("127.0.0.1","root","","agenda");
/*
$sql = "SELECT * FROM contacto";
$consulta = mysqli_query($conexion, $sql);
*/

//me trae una sola fila de la tabla, cuando vuelva a llamar, me trae el sig
/*
$registro = mysqli_fetch_array($consulta);
print_r($registro);
*/
//-----------------------------------------------------------------------
/*
//mostramos a mano
$registro = mysqli_fetch_array($consulta);
echo $registro["nombre"];
echo ", ";
echo $registro["apellido"];
echo "<br>";
*/
//----------------------------------------------------------------------
/*
//itero hasta llegar a NULL. para ver el NULL hago var_dump($variable)
while ($registro = mysqli_fetch_array($consulta)){
    $nombre = $registro["nombre"];
    $apellido = $registro["apellido"];
    echo "$nombre, $apellido<br>";
}
*/
//----------------------------------------------------------------------
//Armamos una lista
/*
echo "<ul>";
while ($registro = mysqli_fetch_array($consulta)){
    $nombre = $registro["nombre"];
    $apellido = $registro["apellido"];
    echo "<li>$nombre, $apellido</li>";
}
echo "</ul>";
*/
//------------------------------------------------------------------------
//Vamos a armar una tabla. Se puede usar un solo echo y todo en una linea, pero es mas legible
/*
echo "<table border=10>";
    echo"<tr>";
        echo"<th>Nombre</th>";
        echo"<th>Apellido</th>"; 
    echo"</tr>";
while ($registro = mysqli_fetch_array($consulta)){
    $nombre = $registro["nombre"];
    $apellido = $registro["apellido"];
    echo"<tr>";
    echo "<td>$nombre</td><td>$apellido</td>";
    echo"</tr>";
}
echo "</table>";
*/
//---------------------------------------------------------------------------
//filtrado de datos
/*
$sql = "SELECT * FROM contacto WHERE nombre = 'Orlando'";
$consulta = mysqli_query($conexion, $sql);

echo "<table border=10>";
    echo"<tr>";
        echo"<th>Nombre</th>";
        echo"<th>Apellido</th>"; 
    echo"</tr>";
while ($registro = mysqli_fetch_array($consulta)){
    $nombre = $registro["nombre"];
    $apellido = $registro["apellido"];
    echo"<tr>";
    echo "<td>$nombre</td><td>$apellido</td>";
    echo"</tr>";
}
echo "</table>";
*/

?>

<!--Asi armamos la lista----------------------------------------------------->
<!--
<ul>
    <li>item 1</li>
    <li>item 1</li>
    <li>item 1</li>
</ul>
-->

<!-- Asi armamos la tabla----------------------------------------------------- -->
<!--
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
    </tr>
    <tr>
        <td>N?</td>
        <td>A?</td>
    </tr>
</table>
-->