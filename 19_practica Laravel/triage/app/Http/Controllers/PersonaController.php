<?php

namespace App\Http\Controllers;

use App\NivelDeUrgencia;
use Illuminate\Http\Request;

use App\Persona; 

class PersonaController extends Controller
{

    public function listar()
    {
        //return Persona::all();
        return NivelDeUrgencia::with('urgencia')->get();
    }

    public function listar_uno($id)
    {
        //return Persona::find($id);
        return NivelDeUrgencia::find($id)->Load('urgencia');
    }
 
    public function alta(Request $request)
    {
        $obj = new Persona();
        $obj->nombre = $request->nombre;   
        $obj->apellido = $request->apellido;   
        $obj->edad = $request->edad;   
        $obj->descripcion_estado = $request->descripcion_estado;   
        $obj->fecha_ingreso = $request->fecha_ingreso;   
        $obj->nivelDeUrgenciaId = $request->nivel_de_urgencia;   
        $obj->save();
        return $obj;
    }

    public function modificar(Request $request, $id)
    {
        $obj = Persona::find($id);
        $obj->nombre = $request->nombre;   
        $obj->apellido = $request->apellido;   
        $obj->edad = $request->edad;   
        $obj->descripcion_estado = $request->descripcion_estado;   
        $obj->fecha_egreso = $request->fecha_egreso;   
        $obj->nivelDeUrgenciaId = $request->nivel_de_urgencia;   
        $obj->save();
        return $obj;
    }
  
    public function borrar($id)
    {
        $obj = Persona::find($id);
        $obj->delete();
    }
}
