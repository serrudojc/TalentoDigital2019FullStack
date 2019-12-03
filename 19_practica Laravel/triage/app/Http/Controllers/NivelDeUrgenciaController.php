<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NivelDeUrgencia; 

class NivelDeUrgenciaController extends Controller
{
    public function listar()
    {
        return NivelDeUrgencia::all();
    }

    public function listar_uno($id)
    {
        return NivelDeUrgencia::find($id);
    }
 
    public function alta(Request $request)
    {
        $obj = new NivelDeUrgencia();
        $obj->color = $request->color;
        $obj->tipoDeUrgencia = $request->tipodeurgencia;
        $obj->tiempoDeEspera = $request->tiempodeespera;   
        $obj->save();
        return $obj;
    }

    public function modificar(Request $request, $id)
    {
        $obj = NivelDeUrgencia::find($id);
        $obj->color = $request->color;
        $obj->tipoDeUrgencia = $request->tipodeurgencia;
        $obj->tiempoDeEspera = $request->tiempodeespera;    
        $obj->save();
        return $obj;
    }
  
    public function borrar($id)
    {
        $obj = NivelDeUrgencia::find($id);
        $obj->delete();
    }
}
