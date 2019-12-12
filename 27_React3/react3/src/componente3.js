import React from 'react';

export default class Componente3 extends React.Component {
    state={
        fecha: new Date()
    }

    constructor(props){
        super(props);
        this.cambiarFecha = this.cambiarFecha.bind(this);
    
    }

    cambiarFecha(){
        this.setState({
            fecha: new Date()
        });
    }

    componentDidMount(){
        console.log('pasé por ComponentDidMount de componente3');
    }

    render(){

        return(
            <React.Fragment>
                <h3>Descripcion</h3>
                <h3>{this.state.fecha.toString()}</h3>  
            <button onClick={this.cambiarFecha} >Cambiar</button>
          </React.Fragment>
        );
    }
}