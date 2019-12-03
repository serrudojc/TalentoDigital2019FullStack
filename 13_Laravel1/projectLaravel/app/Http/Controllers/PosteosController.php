<?php

namespace App\Http\Controllers;

use App\Posteos;   

use Illuminate\Http\Request;

class PosteosController extends Controller
{

    public function listar(){
        return Posteos::all();
    }


/*voy a tener que crear una nueva instancia de posteo, y empiezo a cargar en posteo los datos que me paso el usuario. En el postman, vo ya tener que hacer un JSON con determinada informacion. Tengo que poder recibir todo lo que el usuario esta enviando, por eso porngo el $request
Tengo que enviar un JSON y lo recibo en $request
*/
    public function agregar(Request $request){
        $obj = new Posteos();
        //en $obj tengo los campos de la tabla              $obj->Tabla(campos)
        //en $request tengo los campos de la peticion       $request>Peticion (json)
        $obj->post= $request->post; //request es como esta armando el json, obj es como esta armada la tabla de datos
        $obj->estado_animo_id= $request->estado_animo_id;
        $obj->fecha_entrada= $request->fecha_entrada;
        $obj->save();
        return $obj;
    }
    
    //recibo Id como parametro y busco en el posteo el id y hacer el deletes
    public function delete($id){
        //busco en la base de datos
        $obj = Posteos::find($id);
        //llamo a la funcion
        $obj->delete();
    }

    /*
    Necesito que me pasen el request para acceder a los que me pase el usuario
    Necesito que me pase el id del registro qe voy actualizar
    es lo mismo que guardar, pero en guardar empiezo con una nueva instancia. En actualizar tengo que ir a buscar el posteo en la base de datos por su id.
*/

    public function update(Request $request, $id){
        //traemos una instancia que ya teniamos
        $obj = Posteos::find($id);
        $obj->post = $request->post;
        $obj->estado_animo_id = $request->estado_animo_id;
        $obj->fecha_entrada= $request->fecha_entrada; 
        $obj->save();
        return $obj;
    }

    //me trae el estado de animo, en lugar del numero
    //estadoDeAnimo es el nombre del metodo
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
