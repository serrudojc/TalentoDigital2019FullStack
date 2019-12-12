//import del react
import React from 'react';

//creamos la clase, con el mismo nombre del archivo en mayuscula
//estamos diciendo q este archivo es un componente
export default class Componente1 extends React.Component{
        
    //todo componente necesita un METODO:
    render(){
        //cuando haga referencia a este componente desde otro, el que esta llamando, va pedirle el metodo render
        //escribimos codigo jsx

        var titulo = <h1>Titulo del componente 1</h1>;

        return titulo;
    }

}