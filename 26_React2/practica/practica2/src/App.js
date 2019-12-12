/*
import React from 'react';
import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
    </div>
  );
}

export default App;
*/

import React from 'react';
import logo from './logo.svg';


import './App.css';

//importamos 
import Componente1 from './componente1';

import Componente2 from './componente2';
import Componente3 from './componente3';
import Componente4 from './componente4';

import Componente5 from './componente5';
import ComponenteTabla from './componenteTabla';


function App() {

  //creamos un forEach
  //var lista = ["Juan Carlos", "Maria", "gerardo"];
  var resultado = [];
  /*
  //con arrow
  lista.forEach( lista => {
    resultado.push(<Componente5 nombre={lista} ></Componente5>)
  })
*/
/*
//sin arrow
  lista.forEach(function(lista){
    //la variable tiene codigo HTML dentro, pq es una variable JSX
    resultado.push(<Componente5 nombre={lista}/>);
  });
*/
//------------------------------------------------------
//ahora usamos un vector de json
  
var  lista = [
    { url: 'https://placeimg.com/80/80/people?id=1', title: 'Titulo 1', description: 'Descripcion imagen 1'},
    { url: 'https://placeimg.com/80/80/people?id=2', title: 'Titulo 2', description: 'Descripcion imagen 2'},
    { url: 'https://placeimg.com/80/80/people?id=3', title: 'Titulo 3', description: 'Descripcion imagen 3'},
    { url: 'https://placeimg.com/80/80/people?id=4', title: 'Titulo 4', description: 'Descripcion imagen 4'}
  ];
  lista.forEach(function(lista){
    //la variable tiene codigo HTML dentro, pq es una variable JSX
    resultado.push(<ComponenteTabla dato={lista}/>);
  });

  return (
    // en el return , SOLO PONGO CODIGO HTML
    //referencio como un html, OJO  todo dentro de un tag, un div
    <div>
      {resultado}        

      {/* 
      <Componente5 nombre="Juan Carlos"></Componente5>
      <Componente5 nombre="Maria"></Componente5>
      <Componente5 nombre="Gerando"></Componente5>
      */}
      
      

      <table border = "1">
        <tr>
          <td>
          <Componente4 rutaImagen="/candado.jpg"></Componente4>
          </td>
          <td>
            <tr><Componente2 titulo="Un titulo"></Componente2></tr>
            <tr><Componente3 articulo="Una descripcion"></Componente3></tr>
          </td>
        </tr>
      </table>
    </div>
  );
}

export default App;