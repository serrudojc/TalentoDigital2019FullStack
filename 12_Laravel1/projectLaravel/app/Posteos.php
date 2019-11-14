<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posteos extends Model
{
    protected $table = "posteos";
    public $timestamps = false;

//no me funciona, ademas de pasar el estado de animo, le voy a pasar la foregin key, sino, le tego que cambiar toda la estructura
    public function estadoDeAnimo(){
        return $this->belongsTo('App\EstadoDeAnimo','estado_animo_id');
    }


}
