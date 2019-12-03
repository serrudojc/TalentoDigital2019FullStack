// clase 19/11/19 PDF 17 Node JS
/*

Navegador           Servidor           
-Chrome     ----->  PHP         ----->JS
-Firefox    <-----  MySQL
                    Xampp

EL navegador interpreta HTML, CSS y JS (frontend)
El backend (PHP, Java, C#, Python, Ruby)      



Node JS
Tiene gran cantidad de paquetes, como Laravel tenia el composer.

Forma de trabajo de PHP
- Conexion
-Consulta
- Mostrar

Forma de trabajo NodeJS

-Conexion
-COnsulta --------> mostrar
----
----
----

Me conecto, hago la consulta, y digo: ejecutá el condigo, cuando tenga los resultado.



Si instalo o actualizo node, tengoque cerrar y volver abrir la consola, para que se actualicen las referencias.

terminal

node -v 
version

administracion de paquetes
npm -v

Ejemplo
npm init -f
Me genera un package.json con info


//----------------------------------------------------------------
//----------------------------------------------------------------
javascrip

declaracion de  variables:
var
let
cons
*/


/*
var nombre = 'Juan';
console.log(nombre);

//ejecuto desde la consola, la ubicacion y: node nombreArchivo
*/


/*
//Le paso como parametros a una funcion ,otra funcion
function fnAlFinalizar(){
    console.log('Llamó a finalizar');
}
console.log('Antes');
setTimeout(
    fnAlFinalizar,
    5000
    //cuando pasen 2000 mseg, ejectutá la funcion
);
//demora la llamada a la funcion
console.log('Despues');
*/
/*
la funcion setTimeout es bloqueante, va demorar hacer la operacion, JavaScript va hacer como "fork", un hilo en "paralelo"
esto que va demorar, lo dejo de lado. Cuando pasa el tiempo, vuelvo a ejectutar"
Todo aquello que puede demorar, se corre aparte. Siempre va haber un evento que diga que "esto" finalizó.
CALLBACK HELL muchas demoras
Query usuario --> Query Pendientes ---> Query Totales
*/


/*
//Funcion anónima
console.log('Antes');
setTimeout(
    //fucion anonima, no tien nombre. NO tiene sentido llamarla, pq la voy a usar ahora
    function (){
        console.log('Llamó a finalizar');
    },
    0
);
//demora la llamada a la funcion
console.log('Despues');
*/


/*
//Funcion arrow
console.log('Antes');
setTimeout(
    () => {
        console.log('Llamó a finalizar');
    },
    3000
);
//demora la llamada a la funcion
console.log('Despues');
*/

/*
//SINCRONISMO
EVENTO node sigue ejecutado hasta que ocurra un evento


//promises
consultaDB().then(),catch();
//Si esta todo bien, hgo then, si hay algo mal, catch
//Pero que pasa si tengo alguun error en el codigo del then? no se arregla


//Async/Await
async function consulta(){
    var respuesta = await consultaDB();
    //se ejecuta la consulta, y se queda esperando a que venga la respuesta
    Si hubo un error, lanza una exception (usar try catch)
    var respuesta2 = await consultaDB();
}

*/

//JSON JS
/*
class Persona{
    nombre;
    apellido;
    edad;
}
var persona = new Persona();
persona = xxxx;
Es como que hubiese instanciado una clase
*/
/*
var persona = {
    nombre: 'Orlando',
    apellido: 'brea',
    edad: 41
}

//persona->nombre; esto haciamos en PHP
//en JS, es como acceder a una instancia de un objeto
persona.nombre;
console.log(persona.nombre);
persona.nombre =  'Fabian';
console.log(persona.nombre);
*/

/*Ejercicio 1
Verificar si está instalado el nodejs y npm. Si no está, instalarlos.
Crear una carpeta para el primer ejercicio en nodejs
Crear el package.json en esa carpeta.
PDF
crear el package.json con npm init -f  en la carpeta del proyecto y editarlo para nuestro archivo.


Practica 2
Pasar a función anónima la función saludar
function saludar() {
console.log(‘hola!!’);
}
setTimeout(saludar, 2000);



Practica 3
Crear un timer que muestre por pantalla un contador decreciente desde 100
*/