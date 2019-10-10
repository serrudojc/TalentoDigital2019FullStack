<!DOCTYPE html>
<html>
<head>
	<title>Mostrar variable anterior y posterior</title>
</head>
<body>
	<?php
	$var1 = 9;
	$var2 = $var1+1;
	$var3 = $var1-1;

	print "algo sin etiqueta de salto de linea";
	print "varible original es: $var1";
	echo "<p> variable posterior es: $var2</p>";
	print "variable anterior es: $var3<br>";
	echo "el '<br>' es un salto de linea"
	?>
</body>
</html>