<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$tempCel = $_POST['celcius'];

		$farenheit = $tempCel*1.8+35;

		echo "la temperatura es $farenheit F";
	?>

</body>
</html>