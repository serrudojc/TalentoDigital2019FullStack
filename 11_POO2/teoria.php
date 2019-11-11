<?php

//CONSTRUCTORES

class Tarea{

    //atributos
    public $id;
    public $tarea;
    public $terminada;
    public $fechaFinalizada;
    public $fechaIngresada;

    //metodos
    function __construct(){
        $this->estado = 0;
        $this->fechaIngresada = date("Y-m-d");        
    }

    public function altaTarea(){

    }

    public function finalizarTarea(){
        $this->estado = 1;
        $this->fechaFinalizada = date("Y-m-d");

    }

    public function borrarTarea(){

    }

    public function editarTarea(){

    }

}

 //probando tarea
 $t = new Tarea();
 /*
 $t->tarea = "probar el codigo";
 $t->estado = 0;
 $t->fechaIngresada = date("Y-m-d");
 $t->finalizarTarea();
*/
 echo "<pre>";
 var_dump($t);

//excepciones
/*
Dentro del try pongo todo el codigo que no tengo problema, y en el 
catch, pongo como menejar los problemas

*/

//composer
/*
vamos a empezar a trabajar con condigo de otras personas. (ejemplo, phpmailer, conjunto de 
clases que usamos)
Con esta funcion enviamos archvos, mail, etc

El inconveniente de usar codigo de 3ros, necesite de otro proyecto para laburar
Voy a necesitar n archivos para laburar.

El inconveniente ppal viene cuando se haga un cambio de dependencias, y el codigo nuestro
queda obsoleto. (la aplicacion actualiza y debemos actualizar)

composer permite administrar las dependencias de 3ros.



*/

//espacio de nombres
/*


*/

/*mailer

ejecuto el composer desde linea de comandos
va tardar.

se usa 
incluyendo 

*/

?>