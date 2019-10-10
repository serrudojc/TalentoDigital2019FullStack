<html>
    <body>
    <?php
$vector = array(12,25,24,56,85,63,25,95,65,410);
$vectorMayor = array();
$vectorMenor = array();
$mayor = 0;
$menor = 0;
$promedio = 0;
foreach($vector as $clave => $valor) {
    $promedio = $promedio + $valor;}$promedio = $promedio / 10;foreach($vector as $clave => $valor) {
    if($valor < $promedio) {
        $menor = $menor + 1;
        array_push($vectorMenor, $valor);
    }
    if($valor > $promedio) {
        $mayor = $mayor + 1;
        array_push($vectorMayor, $valor);
    }
}    
    echo "hay $mayor mayores";
    echo "hay $menor menores";
    echo "promedio $promedio";
        
    foreach($vectorMenor as $clave => $valor) {
    echo "<p>$valor es menor que el promedio</p>";
    }            foreach($vectorMayor as $clave => $valor) {
    echo "<p>$valor es mayor que el promedio</p>";
    }        ?>
    </body>
</html>
