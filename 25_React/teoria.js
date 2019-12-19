/*
***********************************************
TP
armar servidor, handlebars
urlencoder (recibir cosas por form)
get, post (recibir, mostrar notificaciones)

***********************************************

//-------------------------------------------------------------
//-------------------------------------------------------------

React 1 ***** PDF 25 ******

Php basico
Laravel
NodeJS
probamos con postman.
Se puede usar hanblebars
Hasta ahora, lado servidor

Ahora, programamos las vistas, lo q ve el cliente
React
Saber HTML, fusionar el codigo con html, parecido al handlebars 
CUANDO USO REACT NO USO HANDLEBARS (motor de templates)
React es del lado del cliente
Handlebars el que responde al cliente es el servidor 
(me devuelve el inddex, el servidor me devuelve el form, cuando 
voy a guardar, es el server el q me comunica con el cliente).

React está entre el browser y el servidor.
Toma la info q viene del server, la modifica esteticamente y la muestra al cliente
EL usuario NUNCA VA HABLAR CON EL SERVIDOR

Servidor  ------------>   React ------------------->  Persona con browser
Ya no hace falta el handlebars, el servidor puede ser "bruto"

COMPONENTES
Se base en componentes. Porcion de pntalla, porcion de vista
React propone que divida lo que el usuario ve en difrentes componentes.
Yo me dedico a programar ese pedazo y luego armo una jerarquia de componentes.
Pedazos de programa: form de comentarios (comentarios, boton enviar)
listado (comentarios con informacion)

Fragmentos visuales : lo que ve el usuario

Cada cosa va ser un formulario, va ser una vista. Cosas dinamicas. No voy hacer un componente para una foto (como el logo, algo estático)

Ejmplo instagram de pdf
Componentes: cosas dinamicas
* Componente general: el posteo, es un componente (esta todo metido dentro de algo)
* componente: algo de codigo voy a tener q escribir (ejemplo, 3 puntitos de menu)
* La imagen, puede ser varias. La imagen la voy a tener que traer del servidor. La imagen es dinamica, es variable. depende del posteo.
* botoncitos: corazones, comentario, favoritos, cuando los toco tengo que hacer algo.
* comentarios: lo que la gente escribe

Pero yo puedo separar en los componentes que quiera


JSX javascrip enriquecido
Mezclo html con js

Puedo asignar a una variable el codigo html

podemos incluir variables con llave {variable}

Cuando el codigo React, SIEMPRE necesito un metodo llamado render

IMPORTANTE

<div>
    <p>Uno</p>
</div>
<div>
    <p>Dos</p>
</div>


<div>
    <div>
        <p>Uno</p>
    </div>
    <div>
        <p>Dos</p>
    </div>
</div


----------------------------- Instalacion ------------------------------
Creamos una carpeta aparte (me parece que no hace falta, se instala global)
npm install -g create-react-app

para crear una app de react. ADENTRO DE LA CARPETA DONDe esta nuestro proyecto
create-react-app <nombre de la app>

si no nos crea, agregamos npx:
npx create-react-app <nombre de la app>

entramos en la carpeta creada:
cd <nombre de la app>

React funciona sobre nodejs (si queremos guardar, obiamos node-modules)

en linea de comandos, dentro de la carpeta del proyecto
npm start
para iniciar un servidor de react en el puerto 3000 (similar a Laravel)

Vamos a VSCode 

app.js
codigo react, require, includes

index.js
Me dice que va utilizar el app, el primer componente q se va ejecutar

Vamos a crear un nuevo componente, dentro de src en mi proyecto

componente1.js

las vistas tienen una jerarquia, un arbol de vistas (no herencia, no son objetos)

                        App
                    /          \ 
        Componente1             Componente4                        
        /          \
Componente2     Componente3

.
Como hago para llamar al componente? App.js y borramos todo dentro del return.
importamos el componente:
import Componente1 from './componente1';

uso tags dentro del return del App.js
Ojo, tengo que tener todo dentro de un tag, por ejemplo el <div>


 
Bootstrap

carpeta public/index.html
React toma esto de base
Luego, las imagenes se ponen dentro de public


*/