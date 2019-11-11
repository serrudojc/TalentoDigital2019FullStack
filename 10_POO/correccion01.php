<?php

class Tarea{

    //atributos
    public $id;
    public $tarea;
    public $terminada;
    public $fechaFinalizada;
    public $fechaIngresada;

    //metodos
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
 $t->tarea = "probar el codigo";
 $t->estado = 0;
 $t->fechaIngresada = date("Y-m-d");
 $t->finalizarTarea();
 echo "<pre>";
 var_dump($t);

?>