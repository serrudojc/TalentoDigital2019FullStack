<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	$numero = array($_POST['num1'], $_POST['num2'], $_POST['num3']);

	for ($i = 0; $i < 3-1; $i++){
		for ($j = $i+1; $j < 3; $j++)
			if($numero[$i] > $numero[$j]){
				$aux = $numero[$i];
				$numero[$i] = $numero[$j];
				$numero[$j] = $aux;
			}
	}
	for ($i = 0; $i < 3; $i++){
		echo $numero[$i];
		echo "<br>";
	}

	?>

</body>
</html>