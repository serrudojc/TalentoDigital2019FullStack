var express = require('express');
var app = express();

app.get('/registro_usuario', function(req,res){
    //voy a psar por query
    res.send('tus datos son '+req.query.nombre+" "+req.query.apellido+" "+req.query.edad);
    //localhost:3005/registro_usuario?nombre=alguien&apellido=algo&edad=18
});



app.get('/color_favorito/:color', function(req,res){
    var html = "<h1>Tu color favorito es "+req.params.color+"<h1>";
    res.send(html);
});
//localhost:3005/color_favorito/colorcito

app.listen(3005,function(){
    console.log("escuchando en el puerto 3005");
});

//tengo que armar un html
//lo que armo en el query, estoy "armndo un string"