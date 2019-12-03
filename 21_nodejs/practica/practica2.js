var express = require("express");
var app = express();

//carpta con archivos staticos, pueden ser accedidos

//app.use(express.static("archivos"));
//accedo con localhost:3000/ransom.png

app.use("/loquequiera",express.static("archivos"));
//localhost:3000/loquequiera/ransom.png


app.listen(3000, function(){
    console.log("servidor funcionando");
});