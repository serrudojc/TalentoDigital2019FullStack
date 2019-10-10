
<?php

	$mensajeError = "";

	if(isset($_POST['nombre']) == false) {
		$mensajeError .="no me mandaste nombre<br/>";
	}

	if(empty($_POST['nombre']) == true) {
        $mensajeError .=" me mandaste un nombre vacio<br/>";
	}

	if(isset($_POST['apellido']) == false) {
		$mensajeError .= " no me mandaste apellido<br/>";
	}

	if(empty($_POST['apellido']) == true) {
		$mensajeError .= " me mandaste un apellido vacio<br/>";
	}

	if(isset($_POST['edad']) == false) {
		$mensajeError .= " no me mandaste edad<br/>";
	}

	if(empty($_POST['edad']) == true) {
		$mensajeError .= " me mandaste un edad vacio<br/>";
	}

	if(empty($mensajeError) == false) {
		echo $mensajeError;
		die();
	}

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];

	if($edad < 1 || $edad > 130) {
		echo "La edad es incorrecta";
		die();
	}

	$nombre .= " ";
	$nombre .= $apellido;
	echo "Hola $nombre<br/>";

	if($edad>= 18){
		echo "Con $edad años ya sos mayor de edad";
	}
	else {
		echo "Aun no cumpliste la mayoria de edad";
	}
​?>