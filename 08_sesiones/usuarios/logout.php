<?php

session_start();
session_destroy();
header("Location: http://localhost/practicas/08_sesiones/usuarios/validarUsuario.php");
?>