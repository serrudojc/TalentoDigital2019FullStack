<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!-- Formularios, pongo <input y luego tipo y nombre 	-->
<form method="post" action="procesarForm.php">
	<!-- el servidor va buscar lo que diga en action -->
	<label>Nombre</label>
	<input type="text" name="nombre">
	<br>
	<label>Nombre</label>
	<input type="text" name="Apellido">
	<br>
	<label>Nombre</label>
	<input type="text" name="edad">
	<!-- el name se va transformar en un variable, o mas bien en un array de variables con indice del mismo nombre, en el servidor-->


	<!-- ahora hago el boton -->
	<button type="submit">Enviar </button>

</form>


<body>

</body>
</html>