<?php

class Formulario{
    /*
    validamos username, password, email
    */
    public function validar($post){
        if($post["username"]==""){
            return false;
        }

        if(empty($post["password"])){
            return false;
        }
        
        if(empty($post["email"])){
            return false;
        }
        return true;
    }
}

$f = new Formulario();
if($f->validar($_POST)){
    echo "Todo OK";
}else{
    echo "Debes ingresar todos los campos";
}

//si no tengo un formulario, puedo usar una aplicacion llamada POSTMAN, que emula formularios.

?>