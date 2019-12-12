import React from 'react';

export default class Componente1 extends React.Component {

     //redefinimos componente
     componentDidMount(){
        console.log('pasé por ComponentDidMount de componente1');
    }

    render(){

        return(
           <img src='perrito.jpg' /> 
        );
    }
}    