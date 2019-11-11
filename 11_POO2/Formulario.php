<?php

class Formulario{

    public function validar($post){
        
        $mensajeError = "";

        if (isset($_POST['nombre']) == false) {
            $mensajeError .= " variables nombre no coinciden<br/>";
        }

        if (empty($_POST['nombre']) == true) {
            $mensajeError .= " me mandaste un nombre vacio<br/>";
        }

        if (isset($_POST['apellido']) == false) {
            $mensajeError .= " variables nombre no coinciden<br/>";
        }

        if (empty($_POST['apellido']) == true) {
            $mensajeError .= " me mandaste un nombre vacio<br/>";
        }

        if (isset($_POST['usuario']) == false) {
            $mensajeError .= " variables usuario no coinciden<br/>";
        }

        if (empty($_POST['usuario']) == true) {
            $mensajeError .= " me mandaste un usuario vacio<br/>";
        }

        if (isset($_POST['pass']) == false) {
            $mensajeError .= " variables pass no coinciden<br/>";
        }

        if (empty($_POST['pass']) == true) {
            $mensajeError .= " me mandaste una pass vacia<br/>";
        }

        if (isset($_POST['email']) == false) {
            $mensajeError .= " variables email no coinciden<br/>";
        }

        if (empty($_POST['email']) == true) {
            $mensajeError .= " me mandaste un email vacio<br/>";
        }

        if (empty($mensajeError) == false) {
            echo $mensajeError;
            return false;
        }
        return true;
    }
}

?>
