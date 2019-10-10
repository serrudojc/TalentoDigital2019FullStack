<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$fecha = $_POST['anio'];
		$fechaActual = date("Y");

		$fech = $fechaActual-$fecha;

		if($fech < 18)
			echo "Es menor de edad";
		else
			echo "Es mayor de edad";
	?>
</body>
</html>