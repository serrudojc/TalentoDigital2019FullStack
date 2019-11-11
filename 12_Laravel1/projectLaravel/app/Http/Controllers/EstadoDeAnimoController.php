<?php

namespace App\Http\Controllers;

use App\EstadoDeAnimo;    //Namespace App, tengo que agregar esto para que funcione listar
use Illuminate\Http\Request;


class EstadoDeAnimoController extends Controller
{

    public function hola(){
        return "Hola Mundo!";
    }

    public function listar(){
        return EstadoDeAnimo::all();
    }

    public function obtenerUno($id){
        return EstadoDeAnimo::find($id);
    }

    public function agregar(Request $request){
        //necesitamos poder acceder a la info del postman
        //en $request me va venir todos lo datos que me cargó el usuario.
        //Carga a mano
        $obj = new EstadoDeAnimo();
        $obj->estado_animo = $request->estado_animo;    //va recibir una propiedad que se llama estado_animo 
        $obj->save();
        return $obj;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //me va listar todos los estados de animo. Rtorna todos los estados de animo de la base de datos
        return EstadoAnimo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
