/*


//---------- PDF 28 RUTEO       17/12/2019

Para cuando tengo apps de mas de una pagina.
Necesito acceder a cada componnte de manera separada.
/listado
/agregar
/etc

http es la ruta + el protocolo

aca, tenemos que armar la ruta , para unir compoponentes
Usuario e conecta con Reaact y React con el servidor.
NO SON PEDIDAS AL SERVIDOR LAS URLS, son pedidas a react

paquetes:

react-router y react-router-dom

inslatar y hacer el import

el codigo que va en el index-

*/


//hacemos el import (es diferente al install)
import { BrowserRouter as Router, Route } from 'react-router-dom'



//este codigo va dentro del render
ReactDOM.render(
<Router>
    <Route exact path="/" component={App} />
    <Route path="/dos" component={AppDos} />
    <Route path="/tres" component={AppTres} />
</Router>
,document.getElementById('root'));

/*
Dentro del Router tengo:
tag  Router le paso 2 paretros : el path, el nombre del componente (clase) con Mayuscula, pq es una clase (no es el nombre del archivo)
Cuando el uusuario haga /algo, que vaya a algun componente

exact, signifca 
/cliente
/cliente/agregar

las dos empiezan con /cliente, si no pongo exact, el Router empieza de arriba, y el primero que ecuentra, corta.
Solo corta al primero que encuentra, no importa si habia otros.
No sigue buscando, no busca por nombre completo.
Cuando es '/', generalmente tiene el exact pq los demas a tienen barra

Ejemplo redux, ruteo

/*





*/

