<?php

/*
Laravel, es un framework

laravel new <nombre_proyecto>
nos crea una carpeta, no necesariamente tiene que estar en htdocs, pq usa
un servidor interno, pero para la base de datos tengo que seguir usando Xammp
localhost:8000/nombre_de_mi_proyecto

carpeta raiz /
en routes/web.php
//cuando el usuario pide / , es el raiz, se va ejecutar lo que ponga aca
Route::get('/', function () {
    return view('welcome');
});
El controler web, retorna una vista.
La vista que vamos a buscar se llama "welcome"

\projectLaravel\resources\views\welcome.blade.php


El html está compuesto por dos grandes secciones.
<head> info no visible, info extra para la pagina.
        estilos (cmo se ve la pagina)
<body>


bootstrap
Es una herramienta que sin demasiado conocimiento, hacer una pagina web proljja. 
Orientado al diseño.
Copio y pego los links en el header



configurcion de la base de datos
C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\.env
nos interesa estas lineas:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=



*/

//-----------------------------------------------------------------------
/*
Patron de diseño
MVC
Se encontró una resolucion comun, una receta.

Ej: facebook, instagram, trabajan con algo llamado "scroll infinito", es un
patron de diseño de interfaz grafica.

"menu hamburguesa" (3 lineas paralelas)

Cuando desarrollamos, pasa lo mismo, necesitamos patrones.
Estrucuras de app webs

ej: en php

- $_POST lo que me manda el usuario             (controlador)
- BD trabajo con base de datos                  (modelo)
- html parte de codigo que muestro al usuario   (vista)

el MVC hace que lo anterior, lo trabaje como "objetos", que uno se encargue
de interaccionar con el usuario, otro que trabaje con la base de datos, otro que muestre al usuario

la info que envia el usuario, entra por el controlador. Puede haber diferentes controladores.
Uno de tareas(pedir listado, agregar, modificar tarea) y otro de usuarios.

Supongamos que el usuario quiere listar las tareas. 
El controlador recibe una peticion "traer las tareas"
Con la peticion, va ir a buscar todas las tareas a BD
Le pido a los modelos, a una entidad o clase particular, que le traiga todas las tareas.
Me va devolver un array de tareas. Instancias.

Con estas tareas, se va defiinir quien va mostrarlas, como tablas, como cards.

El controlador puede decir de que forma se va mostrar la informacion.

el dia de mañana, tocando solo la vista, puedo cambiar el modo de ver la informacion.

Puedo elegir entre borrado fisico o logico en el modelo, si un dia quiero cambiarlo.
borrado logico (campo oculto en la tabla que dice que esta borrado)
borrado fisico (eliminar directamente de la tabla)

*/

/*

Practica 4 Diario intimo

-   Armamos las bases de datos.
-   Creamos un model por tabla:

    php artisan make: model EstadoAnimo

    carpeta raiz
    C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\app

    Especificamos la tabla en el modelo

    protected $table = "estados_de_animo";
    public $timestamps = false;




-controllers

por ejemplo:
$obj = new EstadoAnimo();
$obj->estado_animo = "Feliz";
$obj->save();

Creamos un controller

php artisan make:controller EstadoAnimoController --resource

lo veo en
C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\app\Http\Controllers

Tengo metodos que podria hacer en cada recurso, pero no está implementado.

Luego tabajamos con el index

   public function index()
    {
        //me va listar todos los estados de animo. Rtorna todos los estados de animo de la base de datos
        return EstadoAnimo::all();
    }
estoy llamando a un metodo (all) sin haber hecho una instancia. Es algo particular.

::  en lugar de -> por la particularidad del metodo

El inconveniente es que creo un cotrollador, tengo un metodo index... pero como el usuario accede a esto?
Cuando el usuario me pide /estados y puedo decirle quse dispare el metodo.
web.php C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\routes\web.php

tengo el codigo

Route::get("/estados_de_animo","EstadoAnimoControlloer@index");


Para correr

modifico el .env  C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\.env

y cambio los parametros 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel //aca porgo mi base de datos: diario
DB_USERNAME=root
DB_PASSWORD=


paro el servidor y vuelvo a iniciar el servidor (ctrl+C)
http://localhost:8000/estados_de_animo

Si me tira error 
   return EstadoAnimo::all();

Agregamos pq estamos usando la clase EstadoDeAnimo y si no, no sabe de donde usarla
tengo que agregar en EstadoAnimoController.php:
use App\EstadoAnimo;


*/


/* CLASE 14
PPt14


C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\app\EstadoAnimo.php
//esto me trae todo los estados de animo. el metodo all esta implementado en la clase Model
$listado = EstadoAnimo::all();

usamos :: en lugar de ->
Cuaando llamo a un metodo de una instancia ->
cuando llamo a un metodo de una clase ::

Quiero crear un nuevo estado de animo

$obj = new EstadoDeAnimo(); //creo una instancia
    //asigno propiedades, La tabla Estados de animo, tiene dos campos en la DB
puedo decir

$obj->estado_animo = 'sdsdsa'; //asigno una propiedad
$obj-save(); //guardo en la base de datos

otra cosa que puedo hacer, es ir a buscar un estado de animos partcular, id=5

EstadoDeAnimo::find(5); para que esto funcione, la clave primaria se debe llamar EstadoDeAnimo, si no, no funciona

$obj = EstadoDeAnimo::find(5);


para modificar algo
traigo de la BD

$obj = EstadoDeAnimo::find(5);
$obj->estado-animo = 'estado modi';
$obj-save();

borrar
$obj = EstadoDeAnimo::find(5);
$obj->delete();

//------------------------------------------------------------------

VAMOS A IR AL CONTROLLER EstadoDeAnimoController.php
Cuando el usuario ingrese a /estados_de_animo me devuelva un listado


   public function listar(){
        return EstadoDeAnimo::all();
    }
Pero no va funcinar, agrego: use App\EstadoAnimo;    //agrego esto

Ahora necesito agregar la ruta
C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\routes\api.php 
agrego est
Route::get('/estados_de_animo','EstadoDeAnimoController@listar');

web.php ponemos todo lo que gener html, que retorne una vista. trabajo con html
Pero si queremos solo agregar registros o cosa que no se muestren, se guarada en api.php

localhost:8000/api/estados_de_animo
tngo que entrar en /api

Si quiero traer un estado de animo, tengo que definir la ruta
convencion:
/estados_de_animo/3
quier acceder al estado de animo con id 3

1) en el contoller agregar un afuncion
2) en api.php, a esa ruta, asignarle la ruta de la funcion

    public function obtenerUno($id){
        return EstadoDeAnimo::find($id);
    }

    Route::get('/estados_de_animo/{id}', 'EstadoDeAnimoController@obtenerUno');
()
//------------------------------------------------------------------------------------------
JSon

Heerramiento Postman
Hce peticiones http adonde yo le diga

Con esta herrramienta, en el desplegable puedo hacer peticiones Get, POst, Put, DELEte, etc
Si no, necesitamos desarrollar tda la app del cleinte para probar

metodos http es la forma de comuicarse el navegador con el server, con el apache.


// **************** Practica 2,
hacer lo mismo con los post cuando el usuario ingresa a /posts debes retornar todos los posts

Ya habia creado en
C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\app\Posteos.php

class Posteos extends Model
{
    protected $table = "posteos";
    public $timestamps = false;
}




C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\app\Http\Controllers\PosteosController.php
public function listar(){
    return PosteosController::all();
}

Ahora necesito agregar la ruta
C:\xampp\htdocs\practicas\12_Laravel1\projectLaravel\routes\api.php 
agrego est
Route::get('/posts','PosteosController@listar');

//--------------------------------------------------------------------------------------------------

// Alta, creacion de nuevo estado de animo.

metodo en el contoller de estado de animo, para agregar un nuevo estado de animo

public function agregar(Request $request){
    //necesitamos poder acceder a la info del postman
    //en $request me va venir todos lo datos que me cargó el usuario.
    //Carga a mano
$obj = new EstadoDeAnimo();
$obj->estado_animo = $request->estado_animo;    //va recibir una propiedad que se llama estado_animo 
$obj->save();
    return $obj;
}
//en el caso anterior, $obj->estado_animo se tiene que llamar igual que el campo de la BD, pq es un objeto model
en el $request->estado_animo, aca la puedo llamar como quiera, pero al ir al postman, tengo que llamarla con esta "varaible" estado_animo

voy al api

//cuando el usuario haga en vez de un get un post
Route::post ('/estados_de_animo', 'EstadoDeAnimoController@agregar');

Si yo hago get voy a tener todos los estados de animo
Si yo hago post, voy agregar todos los estados de animo

POSTMAN
Elijo GET en el Postman
localhost:8000/api/estados_de_animo
hago get, me retorna todos los estados de animo

pongo post en el postman
localhost:8000/api/estados_de_animo
voy a body, raw, text:json application
le voy a enviar por post la info que voy a poner, y la info es de tipo json

pongo este codigo en el Postman
{
    "estado_animo": "Nuevo estado de animo"
}

************************************
Vamos hacer lo mismo para posteos.
//Alta creacion de un nuevo posteo

Voy al controller de posteos
public function agregar(Request $request){
        $obj = new Posteos();
        $obj->post= $request->post;  
         $obj->estado_animo_id= $request->estado_animo_id;
        $obj->fecha_entrada= $request->fecha_entrada; 
        $obj->save();
        return $obj;
    }
}

voy al api y ruteo
Route::post ('/posts', 'PosteosController@agregar');

Voy al postman
localhost:8000/api/posteos

{
    "post": "Probando post","estado_animo_id": 1, "fecha_entrada":"2019-5-5"
}
//-----------------------------------------------------------------------------

BORRADO DE UN REGISTRO

Se hace una peticion, borrado al estado de animo 3
Delete/estados_de_animo/3




//------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------

Laravel 14              12/11/2019

MOdel operaciones DB
Controller  interacciona con el extetrior, cada ruta apuntaa a un metodo del controller 

rutas:
web.php: interfaz grafica
api.php: retornar datos
"Hacen lo mismo"

petiones van a ser en base a aadministrar datos.
Si queremos crear una ruta, para cada tabla, ponemos el nombre en plural en la url
/estados_de_animo
/posteos
por convencion

si ponemos en api.php, para acceder , agrego api:
api/estados_de_animo



Operaciones:
Listar todos
Obtener uno
GuardaNuevo
Actualizar
Borrar

/api/estados_de_animo
si quiero traer yo liente, todos los estado de animo, hago peticion tipo get
GET /api/estados_de_animo

Si quiero traer solo un estado de animo
GET /api/estados_de_animo/5     donde 5 es su id

Si quiero crear un nuevo estado de animo
POST /api/estados_de_animo
el post me permite enviar informacion dentro del contenido
(enviamos datos en formato JSON)

Si quiero actualizar un estado de animo
PUT /api/estaods_de_animo/4         si quiero actuaizar el estado 4
(enviamos datos en formato JSON)

Si quiero borrar un estado de animo
DELETE /api/estaods_de_animo/4
Con delete no paso nada informacion.

Con un navegador solo podemos hacer peticiones tipo GET

Para las otraas peticiones, usamos el postman

//--------------------------------------------------------------------------------
Corremos servidor
localhost:8000/api/estados_de_animo

pero tambien podemos usar el postman

Cuando hacemos un post/body/raw/json
y pongo la peticion de los datos que quiero enviar al server

{
    "estados-animo": "asdasadasda",
}

cuando toco enviar, hace una peticion tipo post a estados_de_animo


PDF 15 //------------------------------------

$request en esta variable, viene lo que pongo en el postman
Es decir, se lo envio a store con $request

public function store(Request $request){
    
    //creo un nuevo estado de animo
    $obj = new EstadoDeAnimo();
    
    //el model mapea con las columnas de la base de datos 
    //todo el model mapea con una tabla
    $obj->estado_animo = $request->estado_animo;

    //para que se guarde en la DB
    $obj->save();
    return $obj;

}


creo una ruta para que esto funcione en api.php
No hace falta poner api/ dentro del parentesis, pq lo pone automaticamnete

Route::post('/estados_de_animo','EstadoDeAnimoController@store');

Elijo metodo POST
voy al postman y hago la peticion. en el postman no hace falta poner ;
{
    "estado_animo": "Probando store"
}

luego enviar
y vemos la peticon en body/pretty



//----------------------------
Borrar
delete a una ruta

    public function delete($id){
        //busco en la base de datos
        $obj = EstadoDeAnimo::find($id);
        //llamo a la funcion
        $obj->delete();
    }


//cuando me haga un delete a ..., llame un metodo al controller: controller@metodo

Route::delete('/estados_de_animo/{id},'EstadoDeAnimoController@delete');

Pongo en el postman la url, pero no me va devolver nada en el postman

/*

actualizar

    public function update(Request $request, $id){
        //traemos una instancia que ya teniamos
        $obj = EstadoDeAnimo::find($id);
        $obj->estado_animo = $request->estado_animo;    //va recibir una propiedad que se llama estado_animo 
        $obj->save();
        return $obj;

    }

Route::put('/etados_de_animo/{id}','EstadoDeAnimoController@update');

Voy al postman
PUT  http://localhost:8000/api/estados_de_animo/5
En JSON pongo mi peticion
{
    "estado_animo": "Cambiando estado de animo"
}

//-----------------------------------------------------------------------------------
Realaciones entre models
Cuando entro a un post, puedo entrar al etado de animo asociado a ese posteado

Hcemos las relaciones, hay qe codear en el moddel

Agrego a Posteos.php la funcion

    public function estadoDeAnimo(){
        
    }
}

Posteo id post estadoDeAnimo------------------>EstadoAnimo id estado_animo

Cuando solo tengo uno del otro lado, un posteo tiene un solo estado de animo
return $this->belongsTo('App\EstadoDeAnimo');


//no me funciona, ademas de pasar el estado de animo, le voy a pasar la foregin key, si no, tengo que cambiar toda la estructura
    public function estadoDeAnimo(){
        return $this->belongsTo('App\EstadoDeAnimo','estado_animo_id');
    }
}


quiero traer todos los posteos con el estaddo de animo
En el controler
public function listar_todo(){
        return Posteos::with('estadoDeAnimo')->get();
    }
}




/*
Aca voy a tener un problema al mostrar todos por id o todos.
Tengo que poner primero todo, y luego por id, si no, siempre va entrar por id y nunca voy a entrar por todos.
Si no, la otra es cambiar en el metodo de get listar (linea 26), por listar_todos

Route::get('/posts/listar_todo','PosteosController@listar_todo');
Route::get('/posts/{id}','PosteosController@listar_uno');

En el controller pongo esto

    public function listar_uno($id){
        $posteos = Posteos::find($id);
        return $posteos->Load('estadoDeAnimo');
    
    }
  


*/
?>