
import React from 'react';

//importo los componenes que uso
import Componente2 from './componente2';
import Componente3 from './componente3';
import Componente4 from './componente4';

export default class ComponenteTabla extends React.Component{
    render(){

        return( 
            <table border = "1">
            <tr>
            <td>
            <Componente4 rutaImagen={this.props.dato.url}></Componente4>
            </td>
            <td>
                <tr><Componente2 titulo={this.props.dato.title}></Componente2></tr>
                <tr><Componente3 articulo={this.props.dato.description}></Componente3></tr>
            </td>
            </tr>
            </table>
        );
    }

}


