/*
console.log("Ejercicio 1");

function mostrarNumeros(){
    for(var i=0; i<=10; i++){
        
        console.log(i);
    }
}
console.log("Números entre el 1 y el 10");
mostrarNumeros();

console.log("Ejercicio 2");

function mostrarNumerosPares(){
    for(var i=0; i<=10; i+=2){
        
        console.log(i);
    }
}
console.log("Números pares entre el 1 y el 10");
mostrarNumerosPares();

console.log("Ejercicio 3");

function ingresarNumerosDistintosDe0(){
    do{
        var numero = prompt("Ingrese número: ");
        console.log("El numero es: "+numero);
    }while(numero!=0);
    console.log("Fin")
}
ingresarNumerosDistintosDe0();
*/
console.log("Ejercicio 4");

function menu(){
    var opcion = 0;

    while(opcion!=3){
    console.log("###################################");
    console.log("             1- Abrir              ");
    console.log("             2- Listar             ");
    console.log("             3- Salir              ");
    console.log("###################################");
    opcion = prompt("Elija una opcion: ");
    opcion = parseInt(opcion);
    switch(opcion)
    {
        case 1: console.log("Abrir");
        if (confirm("¿Desea continuar?")) {
            break;
          } else {
            opcion = 3;
            break;
          }
        case 2: console.log("Estamos listando");
        if (confirm("¿Desea continuar?")) {
            break;
          } else {
            opcion = 3;
            break;
          }
        case 3: console.log("Fin");
        break;
        default: console.log("Opción incorrecta");
        break;
    }
    }
}
menu();

