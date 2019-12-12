import React from 'react';
import logo from './logo.svg';
import './App.css';
import Componente1 from './componente1';
import Componente2 from './componente2';
import Componente3 from './componente3';

function App() {
  return (
    <div>
      <table border="1px">
        <tr>
          <td>
            <Componente1></Componente1>
          </td>
          <td>
            <Componente2></Componente2>
            <Componente3></Componente3>
          </td>
        </tr>
      </table>
   </div>
  );
}

export default App;
