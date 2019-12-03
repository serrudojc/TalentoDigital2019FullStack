const express = require("express");
const app = express();

//importo el mongoose
var mongoose = require('mongoose');

//recibir informacion por formulario
app.use(express.urlencoded());
//recibir informacion por json
app.use(express.json());

//hago la conexion con la base de datos
//primer parametro: cadena especifica del servidor, puerto, nombre base de datos(no hace falta crearla, si no existe, la crea. Si existe, la usa)
// segundo parametro:  JSON: 
mongoose.connect('mongodb://localhost:27017/talento15', { useNewUrlParser: true,
useUnifiedTopology: true })

//creo una estructura, le digo en formato JSON qe datos voy a guardar en la estructura (el id lo asigna automaticamente)
var tareaSchema = new mongoose.Schema({
    nombre: String,
    finalizada: Boolean
});

//armamos un model
//1er parametro: nombre, 2do: esquema
var Tarea = mongoose.model('Tarea', tareaSchema);


app.get('/tareas', async function(req, res){
    //una consulta a la base de datos va demorar, neecesito que espere
    var listado = await Tarea.find();
    res.json(listado);
});

app.post('/tareas', async function(req, res){
    var obj = new Tarea();
    obj.nombre = req.body.nombre;
    obj.finalizada = req.body.finalizada;
    //operaciones sobre base de datos, van con await
    await obj.save();
    res.json(obj);
})

//obtener una tarea
app.get('/tareas/:id', async function(req, res){
    var obj = await Tarea.findById(req.params.id);
    res.json(obj);
});


//


app.listen(3000, function(){
    console.log("escuchando en puerto 3000");
});