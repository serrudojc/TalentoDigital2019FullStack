import React from 'react';
import logo from './logo.svg';


import './App.css';

//importamos 
import Componente1 from './componente1';

import Componente2 from './componente2';
import Componente3 from './componente3';
import Componente4 from './componente4';

/*
function App() {
  return (
    //referencio como un html, OJO  todo dentro de un tag, un div
    <div>
    <h1>Hola soy el componente App</h1>
    <Componente1> </Componente1>
    </div>
  );
}

export default App;
*/
/*
function App() {
  return (
    //referencio como un html, OJO  todo dentro de un tag, un div
    <div>
      <table border = "1">
        <th><Componente4></Componente4></th>
        <th>
          <tr><Componente2></Componente2></tr>
          <tr><Componente3></Componente3></tr>
        </th>
      </table>
    </div>
  );
}

export default App;
*/
//resolucion profe

function App() {
  return (
    //referencio como un html, OJO  todo dentro de un tag, un div
    <div>
      <table border = "1">
        <tr>
          <td>
          <Componente4></Componente4>
          </td>
          <td>
            <tr><Componente2></Componente2></tr>
            <tr><Componente3></Componente3></tr>
          </td>
        </tr>
      </table>
    </div>
  );
}

export default App;