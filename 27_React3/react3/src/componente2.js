import React from 'react';

//importo el paquete axios
import axios from 'axios';
import { func } from 'prop-types';

export default class Componente2 extends React.Component {
    //state es algo que me da React, un atributo state, al que le pongo las 
    //variables que si cambian, cambia en la vista.
    //aca adentro van las variables que producen cambios en la vista
    state={
        //creo un array vacio
        //es un json, estructura de datos
        listado:[]
    }

    //puse await a la funcion, por lo tanto y tmb me converti en await (con async)
    async componentDidMount(){
        //tengo que poner await, pq va tardar por el servidor y va seguir de largo
        var respuesta = await axios.get('https://jsonplaceholder.typicode.com/comments');

        if(respuesta.status===200){
            //en respuesta.data está todo el array de las cosas que me va mandar
            //pongo this, para decir q 
            this.setState({listado: respuesta.data});
        }

        console.log('pasé por ComponentDidMount de componente2'+ respuesta.status);
    }

    render(){
        //creamos array vacio
        var listaMostrar = [];
        //hacemos el forEach
        this.state.listado.forEach(function(item){
            //por cada uno de los items del listado q me trajo hago
            listaMostrar.push(
                //ponemos item.name, pq si ponemos item solo, nos rompe toda la pc.
                //pq nos va mostrar errores 
                <h2>{item.name}</h2>
            );
        });

        return(
            //<h2>Titulo</h2>
            <React.Fragment>{listaMostrar}</React.Fragment>
            
        );
    }
}