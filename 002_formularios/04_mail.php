<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="04_mailServer.php" method="POST">
	<label>
		Nombre: <input type="text" name="nombre">
	</label>
	<label>
		E-mail: <input type="text" name="email">
	</label>
	<label>
		Mensaje: <textarea name="mensaje"></textarea>
	</label>
	<button type="submit">Contactar</button>
</form>
</body>
</html>

● Nombre
● E-mail
● Mensaje
Validar que el usuario ingrese todos los campos, en caso que falten
datos, informarle al usuario que campos faltan.
TIP: se deberá utilizar el condicional if