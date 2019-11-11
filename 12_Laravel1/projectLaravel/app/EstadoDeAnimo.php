<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoDeAnimo extends Model
{
    protected $table = "estados_de_animo";
    public $timestamps = false;
}

/*
$obj = new EstadoAnimo();
$obj->estado_animo = "Feliz";
$obj->save();
*/

/*
$listado = EstadoAnimo::all();  //me trae un vector
*/
?>