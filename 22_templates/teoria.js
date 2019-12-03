/*
Repaso

Node JS
Se basa en JS y es importante la parte de las dependencias: npm, por linea de
comandos, bajo las dependencias.

Una es tan impotante que se pide por separado en trbajos: Express
Express es una depenedncia muy importante: tiene la posibiilidad de armar un servidor web.
Me permite armar un listen, y los metodos HTTP para comunicarme (app.get, app.post, etc) Son parte del Express 
Express es como una "libreria" para trabjar mas facil en NodeJS, centrado en la parte de srevidor web.

Archivos estaticos
Yo creo una carpeta, adentro pongo archivos html, css, imagenes, y puedo acceder de forma directa
Instrucciones para acceder en el pdf

localhost:3000/nombredeArchivo

Adentro de cada uno de los metodos que me da el Express, yo tengo dos parametros:
app.post('RUTA(yo la defino)','FUNCION ANONIMA QUE SE VA EJECUTAR QUE VIENE A TRAVES DEL METODO POST');

app.post('/persona','function(req,res'){

}
req= van a parar todas las cosas que se reciben del Get o post
res = var de respuesta, es donde yo le voy a responder. En res tengo muchos metodos para responder

metodo req
req.body.nombreVariableQueMeMandan
lo que llega a traves del metodo post
req.body.nombre
req.body.apellido


El metodo GET se podia armar la ruta de 2 maneras: enviando un valor o enviando clave-valor
www.sitio.com/persona/5 uso params
req.params

app.get('/persona','function(req,res'){
    req.params.id
}


www.sitio.com/persona?id=5&nombre=

req.query

Si uso uno, si no existe, tengo que probar con el otro.

//----------------------------------------------------------
para que un programa funcione en nodejs neceito 3 cosas:

package.json
node.modules
app.js //mi programa

//----------------------------------------------------------
/persona/:nombre

varHtml = "<h1>Hola"+req.params.nombre+" que tal?</h1>"
Uno parte del codigo html con variables para hcer mensaje personalizado



//-----------------------------------------------------------
Templates PRESENTACION 19
quiero tener un modelo de pagina, tener info por otro lado y poner fusionar todo

Creo plantillas html, donde marco determinados campos, lugares donde la info es variable.
Y cuando la info sea solicitada, une la parte estatica y la parte dinaminca (datos),
el usuario recibe una pagina web unida, la fusion se hace en el srevidor.


<div class="estructura">
    <h1>{{título}}</h1>
    <div class="cuerpo">
    //nombre de una variable que le pasé al ttemplate. Selector
        {{cuerpo}}
    </div>
</div>


Handlebars .hbs
Una vez compilada la plantilla, la transforma en html
Nosotros guardamos .hbs, pero al usuario le llega .html

Para funcionar handlebars requiere que arme una estrcutura de carpetas
Crear carpeta views/layouts
Crear los archivos main.handlebars y home.handlebars

mis htmls los guardo en views
En layouts solo pongo el main y NADA MAS

Y para usarlo, tengo que incorporarlo al proyecto, tengo que 
incluir en el proyecto 3 cosas:
el rquire

//------------------------------------------------------------------------------
Vamos a inicia:

creo la carpeta de proyecto

Primero genero el package.json

npm init -f
npm init
Cualquier de los dos. Uno me pregunta linea por linea.

Instalmos el Express
npm install express --save

ahora instalamos el paquete de handlebars
npm install express-handlebars --save

Ahora tenemos que hacer nuestro proyecto, aplicacion

creamos app.js

creamos las carpetas necesarias para el handlebars y los archivos .handlebars (OJO TIEN QUE SER ESTA EXTENSION , INDEPENDIENTE DE SI CAMBIE LA EXTENSION ANTES)

asi tiene que ser el main.handlebars. Puedo agregarle el bootstrap
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        {{{ body }}}
    </body>
</html>


Ahora lo usamos.
Puntos de entrada: url con metodos
metemos algun app.get

vamos a linea de comados 
adentro de la carpeta del proyecto, donde esta la app

prendemos el servidor
node app.js

Voy al navegador
localhost:3000/prueba

//-----------------------------------------------------------------------------------
PRACTICA 1

Creamos una carpeta de archivos estaticos, en la carpeta de priyecto
para trabajar con archivos estaticos, tengo que agregar 

app.use(express.static('public'));

El fomrulario tmb es estico

dentro de public, creo el index.html y un formulario 

Luego voy a app y creo metodo post
 y hago validaciones

 abajo de la carpeta static, pongo 
 app.use(express.urlencoded());
 para q pasen las cosas del formulario al req.body

http://localhost:3000/index.html


copiar para llevar a casa:

app.ps
public
package.json
views



*/