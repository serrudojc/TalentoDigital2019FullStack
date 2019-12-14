/*
React 4: clase 13/12/2019 

Two way binding (enlace de dos vias)
En React trabajamos con el estado, con un input.
Hacemos que el input se relaciones con el estado (una de las propiedades)
Si cambio uno, cambie el otro.
Bassicamten quier oque el input se refleje en el state o viceversa.
O
quiero que lo que el usuario mete en el input, se vaya guardando en el estado



el valor que tiene el nombre, se va mostrar en el value

cuando cambia algo del input, deberia cambiar el estado
onChange
Pero tengo que hacer un metodo fuera, llamado cambioNombre
Por cada tecla q el usuario presiona una tecla, se ejecuta el onChange

Todos los eventos q suceden en react (Ej onChange)

como acceder al input? campo q el usuario cambió
evento.target
con esto, accedo al input type..
Y con esto, peudo accder al value (accedo al input en ese momento)

hay que hacer binding:
error: no puedo asignar setStete a algo que no está definido.
Tenemos que hacer el constructor


el nombre de los metodos, van sin parentesis dentro del render. pq si pongo parentesis, se ejecutan en el momento

Estoy manejando el cabio de los valores en el input
Y manejando los cambios que hace el usuario en el servidor

Si usamos un formulario, voy a tener un monton de inputs

Antes teniamos que el usuario clickee en enviar el formulario, y recien ahi voy a trabajar
Ahora, a medida que escribe, voy trabjando
(ejempplo, autocompletado y busqueda de google)

Actualizacion del estado (lista)
Hasta ahora, trabajabamos por ej, con un nombre.
Pero a veces, se puede complicar el estado, por ej, un listado.

Tenemos q hacer operaciones con el listado (mostrar elemento, borrar, actualizar, etc)
setState (hace cambios en el estado)
CUIDADO:
supongamos q tenemos un listaado cargado

y llamo
this.setState{
    listado: this.state.listado
    MAL. no puedo actualizar el valor del listado, basado en la instancia anterior
    Debido a que la forma que tiene de trabajar React. 
    Cada vez que tengo que actualizar, debe ser con algo nuevo

    listado: [...this.state.listado]
    Estoy creando una copia del listado anterior, es como clonar
    Yo tengo una instancia, no puedo usar esa misma.
    tengo q crear otra instancia igual, y eso si le puedo pasar

}
como aggro un elemento a la lista?

async cambioNombre (evento){
    var nuevoElemento = {id:1, nombre:'Juan'};
    this.setState({
        listado: [...this.state.listado, nuevoElemento]
    })
}


Actualizacion optimista
Agrego directo, sin esperar respuesta del srever.
ventaja:
muy dinamico para el usuario, va rapida la app
Ej, mail de gmail. pongo enviar y parece que se envió el mail. 
Da sensacion de velocidad
Si tardo 2 segundos, sin ningun feedback, el usuario se desepera.
Hay que mostrar un icono, un mensjea, etc

Actualizacion pesimista
Hago todo luego de la respuesta del servidor


Borrado de un elemento 
funcion slice. recibe uno o dos parametros, de la posicion de lo que indico hasta lo ue indico)
Me dvuelve una copia del vector original.

Splice lo que hace es modificar el vector original (ojo con esta)

vector: 1 2 3 4
quiero borrar 3
genero listados de 0-1 y de 3-3 (cuando no recibe un parametro va hata el final)
Poniendo una coma, une ambos elementos (ver pdf)

Actuzalicar elemento de un listado
lo mismo.


MANEJO DE ESTADO
Hasta ahora, c/componente tenia su propio estado
problema:

state = {
    nombre: "aaa"
}

CompA 
    -> CompB
           ->CompC
                ->CompD

Se hace tedioso y complejo pasar de componente a componente

USamos Redux
trbajamos el estado de manera diferete, en lugar de q c/compoente tenga su estado
y sea responsable, metemos todo en un estado de aplicacion
Todo el manejo de cambio de stado (setState)va estar manejado por una unica funcion
Reducer, funcion que se encarga de actualizar el estado gral del aaplicacion (store)

cuando se cambie el estado, va notificar a todos los componentes que haga falta.


//--------------------
Pasos:
1-crear reduce
2-crar index.js 
3- modificar el componente para que trabaje con esto
*/

//prueba Reducer.js

//creamos una estado inicial, json
var estadoInicial = {
    contador: 0
}

//cundo no hay ningun estadoActual, inicio con el estado inciial, Si no, con lo que le pase
export default function (estadoActual = estadoInicial, accion){
    
    if (accion.type=='INCREMENTAR'){
        return {
            //estadoActual va tener el valor que tenga el estado
            contador: estadoActual.contador+1
        }
    }
    if (accion.type=='DECREMENTAR'){
        contador: estadoActual.contador-1
    }
    
    //siempre retorna un estado
    return estadoActual;
    //el inconveniente es qq pasa cuando inicia la app (pq no hay estado antetiro)
}

//index.js

//con llaves, de todo lo que tenes, solo esto
import {Provider} from 'react-redux';
import {createStore} from 'redux';
import pruebaReducer from './pruebaReducer';

var miStore = createStore(pruebaReducer);
ReactDOM.render(
    <Provider store={miStore}>
    <Contador />
    </Provider>,
document.getElementById('root'));


//vamos al componente
import {connect} from 'react-redux';

//sacamos el export defaul
class App2 extends{


}
//fuera de la clase, llamo a connect y m retorna una funcion
//y a esa funcion le paso como paramero el componente que quiero envolver
//con esta hrerramienta, El connect es el interlocutor entre el estado
//y el componente. 

var cambio Estado = function(estado){
    return {
        //le digo que es lo q me interesa ue me avise
        //cuando cambie el caontador, avisame.
        //
        miContador: estado.contador

        //tengo que poner props.miContador 
    }
}

export default connect(null, null)(App2);


export default connect(miContador, null)(App2);





