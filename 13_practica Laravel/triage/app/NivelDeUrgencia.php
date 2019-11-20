<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NivelDeUrgencia extends Model
{
    protected $table = "niveldeurgencia";
    public $timestamps = false;
    use SoftDeletes;
}
