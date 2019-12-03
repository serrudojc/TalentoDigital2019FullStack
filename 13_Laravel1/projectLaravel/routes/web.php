<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/estados_de_animo","EstadoDeAnimoController@index");

Route::get('/prueba','EstadoDeAnimoController@hola');




Route::get("/posts","PosteosController@index");