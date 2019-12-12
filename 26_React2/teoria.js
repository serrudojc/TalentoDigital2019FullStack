/*
Clase 6 diciembre 2012
React2.pdf

npx create-react-app <clase>

react fragment
el return debe ser un unico fragmento de codigo. POr eso metemos todo en un div

Pero caso de table

App.
<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
    </tr>
    <tr>
        <c1>
    </tr>
</table>

donde c1
return(
    <div>
    <td>Pepe</td>
    <td>Perez</td>
    </div>
);

c1 es componente 1
Como no puedo usar el div, uso fragment: mando tdo como un tag y luego desaparece.

return(
    <React.Fragment>
    <td>Pepe</td>
    <td>Perez</td>
    </React.Fragment>
);
Tamb se puede escribir asi:
return(
    <>
    <td>Pepe</td>
    <td>Perez</td>
    </>
);

Comunicacion entre componentes:

en las tablas, partiamos desde App  luego teniamos 3 componentes:
C1, C2, C3
Como se comunican? dos vias. El padre habla con el hijo y viceversa
Paso por parmetros, se hace metiendo dentro del tag la variables
Es como agregar atributos al tag del componente


paso el paramtro
como recibo el parametro, dentro de {this.props.name}


Lo que vamos hacer es pasar los valores como "parametros de funciones", 
en lugar de hardcodearlos


hasta ahora, trabajamos con 3 componentes diferentes y les enviamos atributos diferentes.

//-----------------------------------------------------
Ahora tengo un componente nuevo, 
C5

render(){
    return
        <h1>Hola {this.props.nombre}</h1>
}
Paso diferentes nombres en una misma llamada a un componente. 
Hola juan carlos
hola gerando
Hola Maria


Que pasa si lo que tengo que mandar está en un vector.
el servidor me va devolver un array, que no se que dimension tiene.
Yo voy a recibir la informacion en un array
Esta info del array tengo que transformala en algo visible.

Armo la estructura en un array y luego la muestro

vectorNombres = ["Juan","Maria","Gerando"];
Cuando recorro un vector: for(i=0; i<longitud; i++)
Dentro puedo tener una variable unItem = vectorNombres[i]


forEach forma abreviada de hacer lo anterior.
forEach recibe como parametro una funcion ANONIMA
Push, es una funcion para meter dentro un valor, le paso como parametro las variables JSX (q
 ademas de tener las cosas tradicionales, pueden contener porciones de codgio HTML)

vectorNombres.forEach( function(unItem){
    //unItem por cada iteracion va tener el valor del vector en la posicion que se está iterando
    respuesta.push(
        //una variable JSX puede tener contenido html dentro
        <componente5 nombre = {unItem} />;
    )
    }
);

Ahora en el return, puedo poner un array


arrow =>
me ahorro de escribir function,  parentesis, y las llaves
            function(unItems){

            }

Se puede escribir 
                    unItems =>


Para comentar en react, dentro del html, abro llaves { y aca adentro comento con / * y vuelvo a cerrar}

Dentro del return en el App, siempre va codigo HTML
 Si tengo que declarar funciones, lo tengo que hacer afuera


Ahora nos piden por  cada posiicon del vector, crear una tabla que cree antes.
Vector, en donde en cada posicion en lugar de un valor, hay un JSON.

Si quiero acceder a cada dato puntual, lo accedo como una estructura
{this.props.dato.url}
{this.props.dato.title}
{this.props.dato.description}

Nosotros tenemos la tabla en la app, y es unica.
Si tengo que crear 4 tablas, tengo que pasar la tabla del App a otro componente
Hago un nuevo componente para la tabla, al que le voy a psar como parametro los items de 
la estructura

    
Si me pasan los archivos desde un zip
npm install en la carpeta del proyecto

//------------------------------------------------
10/12/19

Aplicaciones de una sola pantalla.
Ej:ToDo
cuando hago un click en algo,deberia reflejarse el cambio

Para poder hacer esto, hay funciones que se utilizan

metodo y propiedad:
state
lo que meto adentro (variables). Define variables cuyo estado va afectar a la vista.
Cuando fecha cambie de valor en el programa, se va ver reflejado en la vista.

state es un json (estructura de datos) adentro meto las variables que voy a meter. 

esto trabaja con un metodo, se llama

setState

Inicializo las variables especiales que va a modificar la vista, lo hago en state

this.setState ({propiedad: nuevo valor})
(es como hacer un setter and getter)

Para hacer uso de esto, hay que usar eventos.
cosas que suceden, por ej apretar un boton,
tenemos que responder al evento
Eventos mas comunes.

Pero para qe anda, ncesitamos hacer un constructor
Pero al redefinir el constructor, lo primero q tengo q hacer es hacer un llamado
al metodo constructor padre : super (el constructor recibe como parametro props)
luego, viene el nombre del metodo es igual al bind

Esto solo se hace con los metodos que se llaman desde eventos
Cuando voy a llamar a un metodo desde un evento, TENGO QUE HACER EL BINDING

SI NOS DICE QUE NO ENCUENtrA el me METODO, tenemos que hacer esto

Vamos hacer la practica
agregamos boton y evento  al componente descripcion

Ponemos la hora
la propiedad va ser la hora
el metodo va ser cambiar
Acordarse, de modificar el constructor por cada metodo de evento

Al mostrar, no puedo cerrar todo en un <div> pq adentro de una tabla no se usa el div 
usamos el React.Frangment 
Ademas, hay que convertir la fecha a string, pq es un objeto


Para recuperar el archivo para correrlo
Me paro en la carpeta donde descomprimí y hago (no hace falta hacer el npx create...etc):
npm install 


*/