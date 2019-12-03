//incorporo el express
var express = require('express');

//abrego el hanblebars
var exphbs = require('express-handlebars');

//tenemos que hacer que sea una applicacion express
var app = express();

//agrego luego de esto, para el archivo estatico:. Para tener la carpeta con archivos estaticos
app.use(express.static('public'));

//agrego para pasar del formulario post al req.body. Para que ande el formulario
app.use(express.urlencoded());


//otra cosa que tiene qe tener, es terner el servidor (al final)

//ahora incorporamos las 3 lineas de codigo para que el handle bars funcione (una ya la puse)
//primer parametro string, es la extension que tienen que tener el template
//segundo parametro, la varible que cree con el require
//para que ande el handlebars
app.engine('hbs',exphbs());

//primer parametro string reservado
//el segundo string tiene que ver con a extension del archivo
app.set('view engine', 'hbs');

//para trabajar con motores de tembplate, tengo que crear una estructura de carpeta

//-------------------------------------------------------------------------------
//comienzo el programa

//armamos metodo de ruteo
app.get('/prueba',function(req, res){

    var nombre = "Peter";
    var apellido = "Pan";
    var edad = 15;

    //cuando alguein me llame, voy a enviarle un template de hbs
    //pongo el nombre prueba.hbs, que va ser lo que voy a devolver
    //res.render('prueba');
    //con render, estoy transformando, le estoy enviando parametros
    res.render('prueba', {nombre, apellido, edad});

});

//----------------------------------------------------------

app.post('/persona', function(req, res){
    //creamos un array de errores, array de strings
    var errores = [];

    //no trabajamos con empty(si esta vacia) o isset (veo si nos mandaron la var que necesitabamos)
    //SI NO ME MANDO EL NOMBRE O me lo mandó vacio
    if(!req.body.nombre || req.body.nombre == ""){
        //req.send("falta el nombre");
        errores.push("Falta nombre");
    }

    if(!req.body.apellido || req.body.apellido == ""){
        //req.send("falta el apellido");
        errores.push("falta apellido");
    }

    if(!req.body.edad || req.body.edad < 1){
        //req.send("Edad no valida");
        errores.push("falta edad");
    }

    //pregunto si hay algo del array errores
    if(errores.length > 0){
        res.render('error',{errores});
    }

    var nombre = req.body.nombre;
    var apellido = req.body.apellido;
    var edad = req.body.edad;
    res.render('registroExitoso', {nombre, apellido, edad});

    //res.send("Ok");
});






//servidor, puerto y funcion anonima
app.listen(3000, function(){
    console.log("Servidor escuchando en el puerto 3000");
});