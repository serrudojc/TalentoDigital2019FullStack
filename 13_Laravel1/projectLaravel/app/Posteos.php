<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posteos extends Model
{
    protected $table = "posteos";
    public $timestamps = false;
    use SoftDeletes;

//no me funciona, ademas de pasar el estado de animo, le voy a pasar la foregin key, sino, le tego que cambiar toda la estructura
//esta funion me realiaciona ambas tablas
    public function estadoDeAnimo(){
        return $this->belongsTo('App\EstadoDeAnimo','estado_animo_id');
    }


}
