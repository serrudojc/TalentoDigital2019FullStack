<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
/*Vamos a validar los ingresos de datos. 
Con el isset, lo que valido es que haya una variable en el cliente.
Con el empty valido que hya ingresado algo. OJO, un valor 0 lo toma como vacio.
Con is_numeric, veo que haya ingresado un numero.
*/

		if(isset($_POST['celcius'])==false){
			echo "No se envio datos";
			die();
		}

		//empty me toma el valor cero como campo vacio
		/*
		if(empty($_POST['celcius'])==true){
			echo "No enviaste una temperatura";
			die();
		}
*/
		if(is_numeric($_POST['celcius'])==true){
			echo "No enviaste una temperatura";
			die();
		}

		$tempCel = $_POST['celcius'];

		$farenheit = $tempCel*1.8+35;

		echo "la temperatura es $farenheit F";
	?>

</body>
</html>