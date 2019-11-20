

//ejercicio 2
/*
function saludar(){
    console.log("hola!!");
}
setTimeout(saludar, 2000);
*/

/*
//funcion anonima
setTimeout(
    function (){
        console.log("hola!!");
    }
    , 2000);

*/

//ejercicio 3
//Crear un timer que muestre por pantalla un contador decreciente desde 100

var i=10;
var j= setInterval(
        function(){
            console.log(i);
            if(i==0){
                clearInterval(j);
            }
            i-=1;
        },
        1000);
