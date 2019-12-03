var express = require('express');
var app = express();

app.all('/usuario',function(req, res){
    res.send('Hola Mundo!');
});

//abrimos servidor. Un programa web solamente se ejecuta CUANDO RECIBE UN PEDIDO
//el programa se queda escuchando hasta que alguien haga una peticion


app.get('/persona', function(req,res){
    //voy a psar por query
    res.send('Hola '+req.query.nombre);
    //localhost:3000/persona?nombre=ofelia
});

app.get('/nadador/:nombre', function(req,res){
    res.send("HOlla "+req.params.nombre);
});
//localhost:3000/nadador/bertola

app.listen(3000,function(){
    console.log("escuchando en el puerto 3000");
});