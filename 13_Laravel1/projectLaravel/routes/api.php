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
//tengo que poner solo uno (es igual a agregar)
//Route::post('/estados_de_animo','EstadoDeAnimoController@store');

//cuando me haga un delete a ..., llame un metodo al controller: controller@metodo

Route::delete('/estados_de_animo/{id}','EstadoDeAnimoController@delete');

Route::put('/estados_de_animo/{id}','EstadoDeAnimoController@update');


Route::delete('/posts/{id}','PosteosController@delete');
Route::put('/posts/{id}','PosteosController@update');

/*
Aca voy a tener un problema al mostrar todos por id o todos.
Tengo que poner primero todo, y luego por id, si no, siempre va entrar por id y nunca voy a entrar por todos.
Si no, la otra es cambiar en el metodo de get listar (linea 26), por listar_todos
*/

//Route::get('/posts','PosteosController@listar_todo');

Route::get('/posts/listar_todo','PosteosController@listar_todo');
Route::get('/posts/{id}','PosteosController@listar_uno');
