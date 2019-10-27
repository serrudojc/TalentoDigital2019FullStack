<?php

//inicio session
session_start();

//la validacion está en un include
include 'includeValidacion.php';

echo "
<title>Menu</title>
</head>
<body>
    <a href='altaTareas.php'>Alta tareas</a><br><br>
    <a href='filtrarListar.php'>Listar/Editar tareas</a>
    <p><a href='logout.php'>Salir</a></p>
</body>
</html>
"
?>