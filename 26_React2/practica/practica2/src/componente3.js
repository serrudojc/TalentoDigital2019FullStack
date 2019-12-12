/*
import React from 'react';

export default class Componente3 extends React.Component{
    render(){

        //var titulo = <div>Una descripcion</div>;
        const descripcion = <div>{this.props.articulo} </div>
        return descripcion;
    }

}
*/

/*
import React from 'react';

export default class Componente3 extends React.Component{z
    render(){

        //var titulo = <div>Una descripcion</div>;
        const descripcion = <div>{this.props.articulo} </div>
        return descripcion;
    }

}
*/

//eventos clase 10/12/2019

import React from 'react';

export default class Componente3 extends React.Component{

    state={ fecha: new Date()};
    
    constructor(props){
        super(props);
        //hago el binding. Hago por cada boton que necesite
        this.presionoBoton = this.presionoBoton.bind(this);
    }

    //implemento el metodo del evento
    presionoBoton(){        
        //cambiar fecha

        this.setState({fecha: new Date()});
        //console.log('Presionaste el boton');
    }

    render(){

        //var titulo = <div>Una descripcion</div>;

        //no puedo usar un div, pq esta en un componente tabla
        //puedo usar el react.fragment, en casos  donde no puedo usar todo en un div
        //se parsea la fecha a string, pq es un objeto
        const descripcion =
            <React.Fragment>
                {this.props.articulo}
                <h2>{this.state.fecha.toString()}</h2>
                <button onClick={this.presionoBoton}>Soy un botoncito</button>
            </React.Fragment>;
        return descripcion;
    }

}
