/*
//--------------------------------------------------
Creo el proyecto:

creo una carpeta
npm init -y (package .json)

instalo dependencias de express
npm install --save express

Instalo manejo de sesiones con express
npm install --save express-session

//--------------------------------------------------
Creamos un archivo, ejemplo app.js

creamos dependencias de express en el archivo
Creamos un servidor
Podemos ver desde localhost:3000

//---------------------------------------------------
Hacer pantalla de:
pantalla de registracion    (html estatico o handlebars(template))
pantalla de login           (html estatido o handlebars(template))
api de registracion         
api de login

//----------------------------------------------------
Instalamos handlebars
npm install --save express-handlebars
agregamos en el proyecto 
Armamos estructura de carpetas en el directorio

//----------------------------------------------------
Armamos pantalla de registracion en views
registracion.hbs
le ponemos una ruta al form del tipo /registracion
vamos a la app.js y armamos dos rutas: para mostrar el form y para recibir la info que el user cargue en el form (parecido a archivo html y php en PHP)

Armamos template de login.hbs
Definimos rutas en app.js con get

Cuando el usuario se loguea, hace un POST a /login
tenemos dos parametros, req.body.usuario y req.body.password
estos son los 2 parametros que vamos a estar recibiendo

//-----------------------------------------------------
Ya tenemos las vistas armadas y gran parte de la funcionalidad hecha 
Podemos incorporar la base de datos
cuando hago el login, tomo los datos de la DB

instalamos dependecia mongodb
npm install --save mongoose

incorporamos codigo al app.js:
primero: importamos mongoose
segundo:  configuramos

para probar, acordarse de correr mongodb

Ya tenemos la conexion con la db creada
ahora definimos la estructura de los datos de las colecciones (similar a tablas de mysql)
defino schemas (estructuras)
Definimos los datos (el id lo hace automaticamente el mongodb)

Ahora definimos el model

//-------------------------------------------------------
Ahora vamos a trabajar con el  model Usuario
Registracion: Crear un nuevo usuario y guardar en la db

acordarse que cuando se trabaja con db, hay que usar async-await
Probamos y podemos ver en el Compass

Vamos a implementr un login
Tenemos que poder ir a buscar al usuario en la db. 
Cuando trabajamos con la db, usamos el model. vamos al post
//usamos metodo findone para encontrar un usuario (no deberiamos tener mas de un usuario con el mismo nombre) en formato json los parametros nombre propiedad: valor buscado


//--------------------------
Crear api de registracion
Crear api de login

Es el mismo codigo, pero sin interfaz. Solo recibimos las informacion por post

probamos con postman, mandandole un json

trabajamos con api, es para que aplicaciones interactuen con 
nuestro codigo. No es para personas.
El q interpreta esto, es un codigo


//---------------------------


Alguna notas personales:

NO puedo tener dos res.render en una misma funcion
por ejemplo
if(algo){
    res.render(...)
}
res.render(otra cosa)
Me va tirar error la consola. Tengo que ponerlo dentro de un else.

//--------------------------------------------------

API





*/