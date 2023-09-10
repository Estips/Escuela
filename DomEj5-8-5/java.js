/*
Se te ha encomendado la tarea de escribir un programa en JavaScript que
muestre los números del 1 al 100 en una lista ordenada ("ol")
en una página HTML. Sin embargo, los números múltiplos de 3 deben
mostrarse en rojo, los números múltiplos de 5 deben mostrarse en
azul y los números múltiplos de 3 y 5 (es decir, múltiplos de 15) deben mostrarse en verde.
Para ello, deberás realizar las siguientes tareas:
Crear una lista ordenada ("ol") en la página HTML donde se mostrarán los números.     
Escribir un programa en JavaScript que recorra los números del 1 al 100 utilizando un ciclo for.     
En cada iteración del ciclo for, agregar un elemento "li" a
la lista ordenada ("ol") que contenga el número correspondiente.     
Si el número es múltiplo de 3, agregar la clase "rojo" al elemento "li".     
Si el número es múltiplo de 5, agregar la clase "azul" al elemento "li".     
Si el número es múltiplo de 15, agregar la clase "verde" al elemento "li"

modificar las funciones en colores y los valores en cuanto se van a modificar
que tomen un parametro de otro lado 
*/
let i;
let B = 5;
let R = 3;
let G = 15;
let ol = document.getElementById("ol");
function Numeros1al100(){
    for(i = 1; i<=100; i++){
        /*if(i == 1){
            document.writeln('<button class="Button" onclick='+'CambiarSecuencia(B, R, G)'+">Seleccionar colores</button>"); 
        }*/
        if(i % G == 0){
            ol.innerHTML('<li class="Green">'+i+"</li>");
            continue
        }
        if(i % R == 0){
            ol.innerHTML('<li class="Red">'+i+"</li>");
            continue
        }
        if(i % B == 0){
            ol.innerHTML('<li class="Blue">'+i+"</li>");
            continue
        }else{
            ol.innerHTML('<li class="Else">'+i+"</li>");
            continue
        }
    }
}
function CambiarSecuencia(){
    let Azul = parseInt(prompt("Elija el numero a cambiar el azul: "));
    let Verde = parseInt(prompt("Elija el numero del color verde: "));
    let Rojo = parseInt(prompt("Elija el numero del color rojo: "));
    B =  Azul, R = Rojo, G = Verde; 
}
