<?php
$conexion = mysqli_connect("127.0.0.1","root","","tododb");
$sql = "SELECT * FROM todo";
$consulta = mysqli_query($conexion, $sql);

echo "<table border=1>";
    echo"<tr>";
        echo"<th>Id</th>
             <th>Tarea</th>
             <th>Terminada</th>
             <th>FechaLimite</th>
             <th>FechaCreacion</th>"; 
    echo"</tr>";
while ($registro = mysqli_fetch_array($consulta)){
    $id = $registro["id"];
    $tarea = $registro["tarea"];
    $terminada = $registro["terminada"];
    $fechaLimite = $registro["fechaLimite"];
    $fechaCreacion = $registro["fechaCreacion"];
    echo"<tr>";
    echo "<td>$id</td><td>$tarea<td>$terminada<td>$fechaLimite<td>$fechaCreacion</td>";
    echo"</tr>";
}
echo "</table>";
echo "<br>";
//----------------------------------------------------
//Tengo que tirar otro query para volver a trabajar en la tabla
$sql = "SELECT * FROM todo WHERE terminada = 0";
$consulta = mysqli_query($conexion, $sql);

echo "<table>";
    echo"<tr>";
        echo"<th>Id</th>
             <th>Tarea</th>
             <th>Terminada</th>
             <th>FechaLimite</th>
             <th>FechaCreacion</th>"; 
    echo"</tr>";
while ($registro = mysqli_fetch_array($consulta)){
    $id = $registro["id"];
    $tarea = $registro["tarea"];
    $terminada = $registro["terminada"];
    $fechaLimite = $registro["fechaLimite"];
    $fechaCreacion = $registro["fechaCreacion"];
    echo"<tr>";
    echo "<td>$id</td><td>$tarea<td>$terminada<td>$fechaLimite<td>$fechaCreacion</td>";
    echo"</tr>";
}
echo "</table>";
echo "<br>";
//-----------------------------------------------------
//
$sql = "SELECT * FROM todo WHERE terminada = 1";
$consulta = mysqli_query($conexion, $sql);

echo "<table border=02>";
    echo"<tr>";
        echo"<th>Id</th>
             <th>Tarea</th>
             <th>Terminada</th>
             <th>FechaLimite</th>
             <th>FechaCreacion</th>"; 
    echo"</tr>";
while ($registro = mysqli_fetch_array($consulta)){
    $id = $registro["id"];
    $tarea = $registro["tarea"];
    $terminada = $registro["terminada"];
    $fechaLimite = $registro["fechaLimite"];
    $fechaCreacion = $registro["fechaCreacion"];
    echo"<tr>";
    echo "<td>$id</td><td>$tarea<td>$terminada<td>$fechaLimite<td>$fechaCreacion</td>";
    echo"</tr>";
}
echo "</table>";

?>