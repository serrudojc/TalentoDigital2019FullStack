import React from 'react';
import logo from './logo.svg';
import './App.css';
import Componente1 from './componente1';
import Componente2 from './componente2';
import Componente3 from './componente3';
import Componente4 from './componente4';
import Tabla from './tabla';

function App() {
  var respuesta = [];
  var vector = [
    { url: 'https://placeimg.com/80/80/people?id=1', title: 'Titulo 1', description: 'Descripcion imagen 1'},
    { url: 'https://placeimg.com/80/80/people?id=2', title: 'Titulo 2', description: 'Descripcion imagen 2'},
    { url: 'https://placeimg.com/80/80/people?id=3', title: 'Titulo 3', description: 'Descripcion imagen 3'},
    { url: 'https://placeimg.com/80/80/people?id=4', title: 'Titulo 4', description: 'Descripcion imagen 4'}
];

  vector.forEach(function(unItem){
      respuesta.push(<Tabla dato={unItem} />);
  });

  return(
    <div>
      {respuesta}
    </div>

  );


}

export default App;
