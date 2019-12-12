import React from 'react';
import Componente1 from './componente1';
import Componente2 from './componente2';
import Componente3 from './componente3';



export default class Tabla extends React.Component {

    render(){

        return (
            <div>
                <table>
                    <tr>
                        <td>
                            <Componente1 imagen={this.props.dato.url} />
                        </td>
                        <td>
                            <Componente2 titulo={this.props.dato.title} />
                            <Componente3 articulo={this.props.dato.description} />
                        </td>
                    </tr>
                </table>
            </div>
        );
    }

}