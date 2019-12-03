/*
base de datos NO relacional - No SQL
No sigue las normas de las DB relacionales
Puedo cargar info dinamica, lo qe cargo en una vez es diferente a lo que cargo
en otra vez.
la informacion que almaceno en cada registro, puede ser diferente.

DIferentcias

En SQL tengo tablas, en Mongo tengo Colecciones
En SQL tengo filas, en Mongo tengo Documentos

Trabaja con el concepto, por ejemplo, en mi PC, en documentos ,puedo tener diferentes cosas (excel, juegos, word).
Lo que arma, es colecciones de documentos, relaciona los mismos documentos, por ejemplo,
todos documentos de word, y cada documento, puede tener una estructura diferente.

Trabaja con colecciones, pq agrupa cosas que no son 100% similares.
Por ejmeplo, una factura, cada una tiene un numero diferente.
Un carton de bingo, tiene numeracion diferente.
Ahora, yo quiero un sistema que numere, facturas, rifas, bingos... 
La base de datos se adapta a la informacion.

Estructura PDF 20 Mongo

_id es un hash. 
Nombre del cliente
orden

Se guarda como un documento dentro dentro de la misma coleccion

Iniciamos nuevo proyecto
npm init -f
npm install --save express

Instalar mongo

npm install mongoose --save

creamos un nuevo proyecto

agregamos 
const mongoose = require('mongoose');
mongoose.connect('mongodb://localhost:27017/tareas', { useNewUrlParser: true,
useUnifiedTopology: true })

Por cada tabla, el modelo tiene save, find, todo funciona sobre el esquema, la
 estructura es lo que me define el schema
el esquema, seria los "campos" de la tabla
Cada documento, va tener la info que yo digo que tenga.
OJO CUIDADO, RESPETAR LAS MAYUSCULAS, MINUSCULAS, etc

//Ojo el metodo Schema empieza con MAYUSCULA
//vamos a crear un modelo, que va estar ligado con el esquema
var tareaSchema = new mongoose.Schema({
    //esto de aca es un JSON. Defino el tipo de dato, al igual que MySQL
    nombre: String,
    finalizada: Boolean
    });
    //ahora hacemos el modelo.  parametros (nombre de la tabla, con que liga)
    var Tarea = mongoose.model('Tarea', tareaSchema)

ahora pudo hacer get, post, etc, puedo trabajar

OJO, tengo q usar async y await, para decir que espero. No se cuanto voy a demorar
await para indicar que tengo que esperar
async para indicar que como tengo que esperar, tmb me vuelvo asicntronico


//el modelo pertene al esquema. El esquema tiene la estructura de la informacion que voy a guardar
//new Tarea()
//el modelo, matchea el esquema con la tabla
//agregr registro, con POST



//actualizamos
//tengo dos await. Pq se supone que por PUT llego un id
//lo busco, le cambio lo que quiero, y lo guardo
//cargo dos cosas. Todo lo que vaya buscar a la base de datos, va un await

Agregar la linea 
app.use(express.json());

/*


req.params.id si no encuentra el id, tengo que verificar la informacion.
if si no existe, si existe y si esta vacio

verificar si existe algo
*/






*/