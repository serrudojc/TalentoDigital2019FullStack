var express = require('express');
var app = express();
app.use(express.static('public'));

//sesiones
var session = require('express-session');
//configuramos la sesion. 
app.use(session({ secret: 'password'}));

//handlebars (ver luego si esto se escribe mas arriba o aca está bien)
var hbs = require('express-handlebars');
//configuramos handlebars
app.engine('hbs',hbs());
app.set('view engine', 'hbs');

//agregamos configuracion para recibir parametros por POST
app.use(express.urlencoded());
//agregamos configuracion para recibir parametros tipo JSON
app.use(express.json());

var mongoose = require('mongoose');
//configuramos base de datos
//establecemos conexion
mongoose.connect('mongodb://localhost:27017/tablerodb', {useNewUrlParser: true, useUnifiedTopology: true});
//definimos schemas para usuarios:
var usuarioSchema = mongoose.Schema({
    //los documentos de usuario van a tener estos 3 datos
    usuario: String,
    nombre: String,
    apellido: String,
    password: String
});
//ahora definimos el model (por convencion, en mayuscula) parametros(nombre del model, schema que se utiliza)
var Usuario = mongoose.model('Usuario', usuarioSchema);

//definimos schemas para novedades:
var noticiaSchema = mongoose.Schema({
    novedad: String,
    autor: String,
    fecha: Date
});
var Noticia = mongoose.model('Noticia', noticiaSchema);

//-----------------------------------------------------------------
//************* trabajamos con la sesion: req.session **************

//creamos una ruta de inicio
app.get('/', function(req,res){
    //res.send("Bienvenido");
    res.render("home");
});


//mostrar formulario de registracion
app.get('/ver_registracion', function(req, res){
    //devolvemos un template de handlebars ('nombre template')
    res.render('registracion');
});


//recibir informacion por POST por la ruta /registracion
app.post('/registracion', async function(req, res){
    //recibo informacion del form
    var errores = [];
    req.body.usuario = req.body.usuario.trim();
    req.body.nombre = req.body.nombre.trim();
    req.body.apellido = req.body.apellido.trim();
    req.body.password = req.body.password.trim();

    if(!req.body.usuario || req.body.usuario == ""){
        //req.send("Edad no valida");
        errores.push("Falta usuario");
    }
    if(!req.body.nombre || req.body.nombre == ""){
        //req.send("falta el nombre");
        errores.push("Falta nombre");
    }

    if(!req.body.apellido || req.body.apellido == ""){
        //req.send("falta el apellido");
        errores.push("Falta apellido");
    }

    if(!req.body.password || req.body.password == ""){
        //req.send("falta el apellido");
        errores.push("Falta password");
    }

    //pregunto si hay algo del array errores
    if(errores.length > 0){
        res.render("error", {errores, volver:"/ver_registracion"});
    }else{
        var usr = await Usuario.findOne({usuario: req.body.usuario}); 
        if(usr){
            errores.push("El usuario ya existe");
            res.render("error", {errores, volver:"/ver_registracion"});
        }else{
            //creamos un nuevo usuario y cargamos datos en la instancia
            var usr = new Usuario();
            usr.usuario = req.body.usuario;
            usr.nombre = req.body.nombre;
            usr.apellido = req.body.apellido;
            usr.password = req.body.password;
            //al guardar va trabajar con la db. Tengo que esperar a que termine de guardar.
            await usr.save();
            //redireccionamos 
            res.redirect('/ver_login');
        }
    }
});


//api registracion. Sin interfaz, sólo se pasa por post (Postman)
app.post('/api/registracion', async function(req, res){
    var errores = [];
    req.body.usuario = req.body.usuario.trim();
    req.body.nombre = req.body.nombre.trim();
    req.body.apellido = req.body.apellido.trim();
    req.body.password = req.body.password.trim();

    if(!req.body.usuario || req.body.usuario == ""){
        //req.send("Falta usuario");
        errores.push("Falta usuario");
    }
    if(!req.body.nombre || req.body.nombre == ""){
        //req.send("Falta el nombre");
        errores.push("Falta nombre");
    }

    if(!req.body.apellido || req.body.apellido == ""){
        //req.send("Falta el apellido");
        errores.push("Falta apellido");
    }

    if(!req.body.password || req.body.password == ""){
        //req.send("Falta el password");
        errores.push("Falta password");
    }

    if(errores.length > 0){
        //res.render("error", {errores, volver:"/ver_registracion"});
        res.json(errores);
    }else{
        var usr = await Usuario.findOne({usuario: req.body.usuario}); 
        if(usr){
            errores.push("El usuario ya existe");
            //res.render("error", {errores, volver:"/ver_registracion"});
            res.json(errores);
        }else{
            var usr = new Usuario();
            usr.usuario = req.body.usuario;
            usr.nombre = req.body.nombre;
            usr.apellido = req.body.apellido;
            usr.password = req.body.password;
            await usr.save();
            //devuelve datos directamene al usuario
            res.json(usr);
        }
    }
});


app.get('/ver_login', function(req, res){
    res.render('login', {mensaje_error: ''});
});


//cuando el usuario se loguea, hace un post a /login
app.post('/login', async function(req, res){
    //buscamos un usuario parametros (nombre de la propiedad : valor q estoy buscando)
    var usr = await Usuario.findOne({usuario: req.body.usuario, password: req.body.password});

    if (usr) {
        //en la sesion, guardamos el id del usuario q se logueó
        req.session.usuario_id = usr._id;
        req.session.nombre = usr.nombre;
        req.session.apellido = usr.apellido;
        res.redirect('/ver_novedades')
    } else {
        //muestro template
        res.render('login', {mensaje_error: 'Usuario/password incorrecto', personita: req.body.usuario});
    }
});

//api login
app.post('/api/login', async function(req, res){
    var usr = await Usuario.findOne({usuario: req.body.usuario, password: req.body.password});

    if (usr) {
        req.session.usuario_id = usr._id;
        req.session.nombre = usr.nombre;
        req.session.apellido = usr.apellido;
        //res.redirect('/ver_novedades');
        res.json(usr);
    } else {
        //si no se encontró usuario, me retorna 404 en el postman
        res.status(404).send();
    }
});


app.get('/logout', function(req, res) {
    req.session.destroy();
    res.redirect('/');
});

//-----------------------------------------------------------------

app.get('/ver_novedades', async function(req, res){
    //chequeo que esté logueado
    if(!req.session.usuario_id){
        res.redirect('/ver_login');
        return;
    }
    var lista = await Noticia.find().sort({fecha: -1});
    res.render('novedades', {lista, nombre: req.session.nombre, apellido: req.session.apellido});
});


app.get('/api/ver_novedades', async function(req, res){
    if(!req.session.usuario_id){
        res.redirect('/ver_login');
        return;
    }
    var lista = await Noticia.find().sort({fecha: -1});
    res.send(lista);
});


app.post('/novedades', async function(req,res){
    var errores = [];

    if(!req.session.usuario_id){
        res.redirect('/ver_login');
        return;
    }
    req.body.novedad = req.body.novedad.trim();
    if(!req.body.novedad || req.body.novedad == ""){
        //req.send("falta el apellido");
        errores.push("Falta novedad");
    }

    if(errores.length > 0){
        res.render("error", {errores, volver:"/ver_novedades"});
    }else{
        var unaNovedad = new Noticia();
        unaNovedad.novedad = req.body.novedad;
        unaNovedad.autor = req.session.nombre + " " + req.session.apellido;
        unaNovedad.fecha = new Date();
        await unaNovedad.save();
        res.redirect('/ver_novedades');
    }
});


app.post('/api/novedades', async function(req,res){
    //consultar: como se hace para verificar usuario desde Postman?
    var errores = [];

    if(!req.session.usuario_id){
        res.redirect('/ver_login');
        return;
    }
    req.body.novedad = req.body.novedad.trim();
    if(!req.body.novedad || req.body.novedad == ""){
        //req.send("falta el apellido");
        errores.push("Falta novedad");
    }

    if(errores.length > 0){
        res.render("error", {errores, volver:"/ver_novedades"});
        res.json(errores);
    }else{
        var unaNovedad = new Noticia();
        unaNovedad.novedad = req.body.novedad;
        unaNovedad.autor = req.session.nombre + " " + req.session.apellido;
        unaNovedad.fecha = new Date();
        await unaNovedad.save();
        //res.redirect('/ver_novedades');
        res.json(unaNovedad);
    }
});

//-----------------------------------------------------------------//creando servidor
app.listen(3000, function(){
    console.log('escuchando puerto 3000');
});