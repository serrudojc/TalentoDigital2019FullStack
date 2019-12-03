/*
presentacion 18

Express. Dependencia que se instala sobre nodejs. Me trae entre otras cosas nos da la 
posibilidad de hacer post, get, delete, etc

M Mongo (DB no relacional)
E Express (es tan impotante que sepamos trabajar con esta dependencia)
A angular/react
N NodeJS

Nosotros creabamos el html que se iba a mostrar (con el php).
La idea es cuando usamos nodejs es trabajar de forma dividida, cliente (react) e informacion.
No voy hacer el html para mostrarlo, lo que voy hacer es trabajar con la informacion, y devolver json.
El react se va encargar de trabajar con el json.

el servidor "escucha".
Cuando instalabamos Laravel, teniamos q iniciar desde consola
cuando hacimos php directo, teniamos que levantar apache con xampp
Cuando trabajo con Express, trae funciones para trabajar con un servidor propio.
Hago mi propia "orejita" para escuchar.

Instalacion de Express

para saber si tengo instalado node y npm
node -v
npm -v


--save agrega dependencia en package json

npm init -f

npm install express --save

Solo me llevo mi package.json y mi programa .js, no hace falta nada mas.


Cuando hago un programa en express, tengo que hacer un "import"
es dercir 
var express = require('express);
var app =express()

app es un objeto, de tipo Express.

luego vienen metodos
app.get('/usuario)
app.get(
    //primer parametro. Ruta. Es lo que yo creo. 
    "/usuario",
    //funcion anonima que recibe parametros del get.
    //req: lo que el cliente me mandó. pueden ser 3 cosas:
    //body: donde viajan las cosas del post, cuerpo del post
    //params: para lo del get, cuando viaja en el header, encabezado. 
    //querty: para lo del get, cuando viaja en el header, encabezado. 
    //lo que pasa, es que las cosas pueden viajar dferente:
    // www...../usuario'/'lorena'/123 con la barra tiro directamente el dato
    // www...../usuario?nombre=lorena&clave=123 
    //el RES se usa para q nosotros, servidor, Express, le enviemos info al usuario.
    //RES es un tipo de variable, un objeto que tiene metodos.
    function(req,res){
        res.send("Hola Mundo");
    }
);


//dos paremtros: 1= puerto del servidor.
app.listen(3000, function(){

})

En laravel teniamos dos archivos
Route: le digo q que controleer iba
HTTP (post, get, delete, put). El get se usa de dos maneras: '/' listar todos. O '/{1}' me trae un especifico

Vamos hacer una practica : app.js

var express = requiere('express');
var app = express();

app.get('/usuario',function(req, res){
    res.send('Hola Mundo!');
});

//abrimos servidor. Un programa web solamente se ejecuta CUANDO RECIBE UN PEDIDO
//el programa se queda escuchando hasta que alguien haga una peticion

app.listen(3000,function(){
    console.log("escuchando en el puerto 3000");
});

Vamos a la terminal

node app.js

Luego vamos al navegador y ponemos
localhost:3000/usuario

con ctrl C detengo el servidor para volverlo a correr

Ruteo
Metodos HTTP GET y HTTP POST Permiten enviar información al servidor.

Una forma de armar la ruta para el GET
?clave=valor
.../usuario/?nombre="Lorena"&clave='123';

PENSEMOS....
si "/" es la raiz
Como hago para que localhost:3000/usuario/

le agrego una barra. Porque la ruta la armo YO. 
app.get('/usuario/',function(req, res){
}

Direccionamiento basico
app.get, post, delete, put

app.all
Cualquier cosa que le ponga, me muestra todo
Lo veo con el postman


app.route
Me ahhorra el tener que escribir el usuario entodas los metodos

app.get('/usuario',...)
app.post('/usuario',...)
app.put('/usuario',...)

app.route('/usuario')
    .get()

}


req tien dos cosas: params o query
params, viaja solo el valor.
Estoy poniendo en la url
------/usuario/Lorena
Pero en el codigo tengo que poner
app.get("/usuario/:nombre") OJO PONER SIEMPRE LOS :
lo qie pongo aca, es el nombre que le quiero dar al valor que me pasa el usuario. Es como una variable mia interna.
Cuando hago el send, tengo que poner el nombre de mi variable interna donde almaceno el valor que viene en la url

query, cuando viaja con el ? y el &



Vmos a practicar un poco
//--------------------------------------------------------------
MANEJO DE ARCHIVOS ESTATICOS

//primero tengo que crear la carpeta, con archivos
app.use(express.static('nombre de la carptea'));

practica2.js

var express = require("express");
var app = express();

//carpta con archivos staticos, pueden ser accedidos
app.use(express.static("archivos"));

//accedo con http://localhost:3000/ransom.png

app.listen(3000, function(){
    console.log("servidor funcionando");
});

http://localhost:3000/ransom.png

Rutas relativas y aboslutas

./imagen/...
desde donde estoy parado, una  cartpeta imagen y de ahi en adelante. Es relativo
    ./      ---> "desde donde estoy parado"



Recorrido absoluto
c:\Escriorio\html\index.html

No importa donde estyo parado, digo como llegar desde la base.



*/