<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    protected $table = "persona";
    public $timestamps = false;
    use SoftDeletes;

    public function urgencia() {
        return $this->belongsTo('App\NivelDeUrgencia', 'nivelDeUrgenciaId');
    }
}