var express = require('express');

var exphbs = require('express-handlebars');
​

var app = express();

​

app.engine('hbs', exphbs());

app.set('view engine', 'hbs');

​

var listado = [

    {

      "userId": 1,

      "id": 1,

      "title": "delectus aut autem",

      "completed": false

    },

    {

      "userId": 1,

      "id": 2,

      "title": "quis ut nam facilis et officia qui",

      "completed": false

    },

    {

      "userId": 1,

      "id": 3,

      "title": "fugiat veniam minus",

      "completed": false

    },

    {

      "userId": 1,

      "id": 4,

      "title": "et porro tempora",

      "completed": true

    },

    {

      "userId": 1,

      "id": 5,

      "title": "laboriosam mollitia et enim quasi adipisci quia provident illum",

      "completed": false

    },

    {

      "userId": 1,

      "id": 6,

      "title": "qui ullam ratione quibusdam voluptatem quia omnis",

      "completed": false

    },

    {

      "userId": 1,

      "id": 7,

      "title": "illo expedita consequatur quia in",

      "completed": false

    },

    {

      "userId": 1,

      "id": 8,

      "title": "quo adipisci enim quam ut ab",

      "completed": true

    },

    {

      "userId": 1,

      "id": 9,

      "title": "molestiae perspiciatis ipsa",

      "completed": false

    },

    {

      "userId": 1,

      "id": 10,

      "title": "illo est ratione doloremque quia maiores aut",

      "completed": true

    },

    {

      "userId": 1,

      "id": 11,

      "title": "vero rerum temporibus dolor",

      "completed": true

    },

    {

      "userId": 1,

      "id": 12,

      "title": "ipsa repellendus fugit nisi",

      "completed": true

    },

    {

      "userId": 1,

      "id": 13,

      "title": "et doloremque nulla",

      "completed": false

    },

    {

      "userId": 1,

      "id": 14,

      "title": "repellendus sunt dolores architecto voluptatum",

      "completed": true

    },

    {

      "userId": 1,

      "id": 15,

      "title": "ab voluptatum amet voluptas",

      "completed": true

    },

    {

      "userId": 1,

      "id": 16,

      "title": "accusamus eos facilis sint et aut voluptatem",

      "completed": true

    },

    {

      "userId": 1,

      "id": 17,

      "title": "quo laboriosam deleniti aut qui",

      "completed": true

    }

  ];

​

app.get('/tareas/:id', function(req, res){

  //lo hacemos de dos formas:
  /*
  //forEach recibe cmo parametro una funcion a ejectutar.
  var tarea;
  tarea = listado.forEach(function(elemento){
    //verifico
    if(elemento.id == req.params.id){
      return true;
    }
  });
*/
  //mas eficiente
  //find es una funcion que tambien va iterar y recorrer, va buscar lo que esta en la comparacion
  //find le pasa como parametro automaticamente a la funcion que estoy armando, algo , cualquier cosa (elemento) y con esa veo si cumple con la condicion
  
  /*
  var tarea = listado.find(function(elemento){
    if elemento.id == req.params.id){
      return true;
    }else{
      return false;
    }
  });
  */

  var tarea = listado.find
    ( elemento => elemento.id == req.params.id);

//tenemos que hacer el render solo del elemento encontrado
    res.render('tareatp2', {tarea});

});

​

​

app.listen(3000, function(){

    console.log("Escuchando en el puerto 3000");

});

​

​

  