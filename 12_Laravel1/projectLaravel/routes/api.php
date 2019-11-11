<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/estados_de_animo','EstadoDeAnimoController@listar');

//definimos ruta para el metodo . POngo entre llaves, por ser una variable que cambia
Route::get('/estados_de_animo/{id}', 'EstadoDeAnimoController@obtenerUno');




Route::get('/posts','PosteosController@listar');

//cuando el usuario haga en vez de un get un post
Route::post ('/estados_de_animo', 'EstadoDeAnimoController@agregar');


Route::post ('/posts', 'PosteosController@agregar');