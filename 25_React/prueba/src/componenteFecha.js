//import del react
import React from 'react';

//creamos la clase, con el mismo nombre del archivo en mayuscula
//estamos diciendo q este archivo es un componente
export default class ComponenteFecha extends React.Component{
        
    render(){
        //objeto
       var fecha = new Date();
       //hay que transformalo en string
       var fechastring = fecha.toString();
       
        return <div>{fechastring}</div>;
    }
}