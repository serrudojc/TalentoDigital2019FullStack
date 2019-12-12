/*
Clase 10 diciembre 2019 React 3.pdf

//-------------------------------------------

Para recuperar el archivo para correrlo, desde un zip:
Me paro en la carpeta donde descomprimí y hago (no hace falta hacer el npx create...etc):
npm install 

//-------------------------------------------

Ciclo de vida de los componentes React 3 pdf clse 27

Hasta ahora vimos atributo state, con metodo setState
Pero hay varios, forma parte del ciclo de vida de los componentes

pasos que hace el progama para terminar de construir las vistas
Ejempl, tengo 3 componentes: imagen, titulo, descripcion

Los pasos son el ciclo de vida.

Montaje (agarra y reemplaza el tag <Componente> por el codigo del componente)
Se hace en una secuencia:
ejecuta constructor, luego render (devuelve cod html), actualiza el DOM (javascript)
transforma todo en objetos, a cada tag html. 
        html
        /   \
    head    body
            /   \
        h1      div
React parte de un index.html, agarra la estructr y le va metiendo los componentes. va armando el arbol
luego lo transforma en html puro
Luego ejectua metodo componenteDidMount. puedo tocar esto, puedo meter funciones,
ejemplo, conexion con base de datos

Actualizacion
ya tengo corriendo las cosas y haciendo click cambio
tengo setState, se ejecuta metodo render, metodo actialicion del DOM y el componentDidUpdate

el render es obligatorio que lo redefina
es importate el momento en que se ejecuta cada cosa, para saber donde voy a modificar  o meter funciones.

Etapa de desmontaje
componentwillUnmount
cerrar conexiones, etc, todo aquello que impplique cerrar correctamente 





no es lo mismo inicializar el state, que el setState
No puedo actualizar algo que todavia no existe

PRACTICA

reviso por en el navegador, boton derecho/inspeccionar elemento, consola

//-----------------------------------------------------------


CONEXION CON SERVIDORES REMOTOS

instalamos componente axios de manera local
npm install --save axios

HTTP------ruta y metodo
            post
            get todos
            get id
            delete
            PUT
Nosotros implementamos esto del lado del servidor. y usamos el postman pq no teniamos 
lado cliente
Ahora tenemos cliente, lo que hace es comunicarse con el servidor por axios

axios es a React lo que express a Node

vamos al componente 2


Verificar el codigo de respuesta del servidor
la respuesta del srevidor, por el axios, esta dividida en 2 partes: 
status: numero que me devuelve el srevidor (si pudo o no ejecutar lo que solicité)
data: la informacion

creo un listado[], para poder usarlo, en un state (par que me afecte a la vista)

luego adentro del componentDidMount accedo al state, listado, lleno con la info (en caso de que haya sido OK)

cuando me llega el pquete de informacion del servidor, el axios pone de una lado 
data y status

en state, pngo las variables que van a cambiar de forma dinamica en la pagina
las variables que van a tener un cambio en la vista, solo se pueden actualziar 
si estan dentro de setState. 
cuando se ejecuta el setState, se vuelve a ejecutar el render, por eso se actualiza
(ver ciclo de vida Actualzacion)

tenemos que mostrar los datos, con un forEach


Luego, vamos a separar en carpetas por componente.
Cada carpeta va tener el componente, para que quede mas ordenado.
Adentro puede ir luego el .css, el .js, etc

*/