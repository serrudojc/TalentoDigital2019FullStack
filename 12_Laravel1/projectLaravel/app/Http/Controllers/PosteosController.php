<?php

namespace App\Http\Controllers;

use App\Posteos;   

use Illuminate\Http\Request;

class PosteosController extends Controller
{

    public function listar(){
        return Posteos::all();
    }



    public function agregar(Request $request){
        $obj = new Posteos();
        $obj->post= $request->post;
        $obj->estado_animo_id= $request->estado_animo_id;
        $obj->fecha_entrada= $request->fecha_entrada;
        $obj->save();
        return $obj;
    }
    
    public function delete($id){
        //busco en la base de datos
        $obj = Posteos::find($id);
        //llamo a la funcion
        $obj->delete();
    }

    public function update(Request $request, $id){
        //traemos una instancia que ya teniamos
        $obj = Posteos::find($id);
        $obj->post = $request->post;
        $obj->estado_animo_id = $request->estado_animo_id;$obj->fecha_entrada= $request->fecha_entrada; 
        $obj->save();
        return $obj;
    }

    public function listar_todo(){
        return Posteos::with('estadoDeAnimo')->get();
    }

    public function listar_uno($id){
        $posteos = Posteos::find($id);
        return $posteos->Load('estadoDeAnimo');
    
    }
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

/*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function update(Request $request, $id)
    {
        //
    }
/*
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
