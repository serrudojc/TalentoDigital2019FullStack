var express = require('express');

//colocamos require de mongo
var mongoose = require('mongoose');
//primer parametro: ruta, segundo un json
mongoose.connect('mongodb://localhost:27017/tareas', { useNewUrlParser: true, useUnifiedTopology: true });

var app = express();
app.use(express.json());

//Ojo el metodo Schema empieza con MAYUSCULA
//vamos a crear un modelo, que va estar ligado con el esquema
var tareaSchema = new mongoose.Schema({
    //esto de aca es un JSON. Defino el tipo de dato, al igual que MySQL
    nombre: String,
    finalizada: Boolean
 });

//ahora hacemos el modelo.  parametros (nombre de la tabla, con que liga)
var Tarea = mongoose.model('Tarea', tareaSchema);


//-------------------- empezamos a trabajar ------------------------------------------------

//como me estoy conectadod con una BD, no se cuanto puede tardar.
//si no le pongo el await, sigue andando, sigue de largo y no espera la conexion
//Proceso asincronico, no sigue el orden que estoy programando.

app.get('/tareas', async function(req, res){
    //me conecto con el modelo
    var lista = await Tarea.find();
    res.send(lista);
});

app.get('/tareas/:id', async function(req,res){
    //me conecto con el modelo
    var unaTarea = await Tarea.findById(req.params.id);
    res.send(unaTarea);
});

//me esta faltando el try catch, verificar que el params.id tnga algun valor, etc

//el modelo pertenece al esquema. El esquema tiene la estructura de la informacion que voy a guardar
//new Tarea()
//el modelo, matchea el esquema con la tabla
app.post('/tareas/', async function(req,res){
    //creo un objeto Tarea
    var unaTarea = new Tarea();
    //le pongo de nombre lo que me mandaron
    unaTarea.nombre = req.body.nombre;
    unaTarea.finalizada = req.body.finalizada;
    await unaTarea.save();
    res.send("Guardé");
});

//actualizamos
//tengo dos await. Pq se supone que por PUT llego un id
//lo busco, le cambio lo que quiero, y lo guardo
//cargo dos cosas. Todo lo que vaya buscar a la base de datos, va un await
app.put('/tareas:id', async function(req,res){
    var tarea = await Tarea.findById(req.params.id);
    tarea.nombre = req.body.nombre;
    tarea.finalizada = req.body.finalizada;
    await tarea.save(); //tmb con await, pq tambien tarda
    res.send("Actualicé");
})

/*
req.params.id si no encuentra el id, tengo que verificar la informacion.
if si no existe, si existe y si esta vacio
*/

//borrado
app.delete('/tareas:id', async function(req, res){
    await Tarea.findByIdAndRemove(req.params.id);
    res.send("Borré");
})


app.get('/', function(req, res){
    res.send('ok');
});


app.listen(3000, function(){
    console.log("escuchando en puerto 3000");
});