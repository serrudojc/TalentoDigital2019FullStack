var express = require('express');
var app = express();
var session = require('express-session');
var hbs = require('express-handlebars');
var mongoose = require('mongoose');

// Sesiones
app.use(session({secret: 'UnaClaveMuySecreta'}));
// Handlebars
app.engine('hbs', hbs());
app.set('view engine', 'hbs');
// Recibir información desde formulario y JSON
app.use(express.urlencoded());
app.use(express.json());
// Base de datos
mongoose.connect('mongodb://localhost:27017/talento_login', {useNewUrlParser: true, useUnifiedTopology: true});

var usuarioSchema = mongoose.Schema({
    usuario: String,
    email: String,
    password: String
});

var Usuario = mongoose.model('Usuario', usuarioSchema);

app.get('/', function(req, res) {
    res.send('Bienvenido!!');
});

app.get('/crear', function(req, res) {
    req.session.contador = 0;
    res.json(req.session.contador);
});

app.get('/incrementar', function(req, res) {
    req.session.contador++;
    res.json(req.session.contador);
});

app.get('/ver_registracion', function(req, res) {
    res.render('registracion');
});

app.post('/registracion', async function(req, res) {
    //req.body.usuario
    //req.body.email
    //req.body.password
    var usr = new Usuario();
    usr.usuario = req.body.usuario;
    usr.email = req.body.email;
    usr.password = req.body.password;
    await usr.save();
    res.redirect('/ver_login');
});

app.post('/api/registracion', async function(req, res) {
    //req.body.usuario
    //req.body.email
    //req.body.password
    var usr = new Usuario();
    usr.usuario = req.body.usuario;
    usr.email = req.body.email;
    usr.password = req.body.password;
    await usr.save();
    res.json(usr);
});

app.get('/ver_login', function(req, res) {
    res.render('login');
});

app.post('/login', async function(req, res) {
    // req.body.usuario
    // req.body.password
    var usr = await Usuario.findOne({usuario: req.body.usuario, password: req.body.password});
    if (usr) {
        req.session.usuario_id = usr._id;
        res.redirect('/segura');
    } else {
        res.render('login', {mensaje_error: 'Usuario/password incorrecto', usuario: req.body.usuario});
    }
})

app.post('/api/login', async function (req, res) {
    // req.body.usuario
    // req.body.password
    var usr = await Usuario.findOne({usuario: req.body.usuario, password: req.body.password});
    if (usr) {
        req.session.usuario_id = usr._id;
        res.json(usr);
    } else {
        res.status(404).send();
    }
});

app.get('/segura', function(req, res) {
    if (!req.session.usuario_id) {
        res.redirect('/ver_login');
        return;
    }
    res.send('Pantalla segura!!!');
})

app.listen(3000, function() {
    console.log('Corriendo en el puerto 3000');
});