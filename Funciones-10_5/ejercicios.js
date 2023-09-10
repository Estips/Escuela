/*console.log("EJERCICIO 2");

console.log("Hola mundo");

console.log("EJERCICIO 3");

let a, b
let resultado
a=10
b=10
resultado = a+b

console.log("El resultado es: "+resultado);

console.log("EJERCICIO 4");

let num1, num2
let resultado1, resultado2

num1=20
num2=20

resultado1=num1+1
resultado2=num2+5

console.log("Resultado 1: "+resultado1);
console.log("Resultado 2: "+resultado2);

console.log("EJERCICIO 5");

let n1, n2;
let resultado3
n1=13
n2=11
resultado3= n1*n2
console.log("valor de n1: "+n1) 
console.log("valor de n2: "+n2)
console.log("El resultado es: "+resultado3)

console.log("Ejercicio 6") 

let num = prompt("Ingrese un numero: ");
console.log("el numero es: "+num);

console.log("Ejercicio 7")

let resul
resul=num*10
console.log("el resulltado es: "+resul)

console.log("Ejercicio 8")

let nA = prompt("ingrese un numero: ")
let nB = prompt("ingrese otro numero: ")
console.log(parseInt(nA)+parseInt(nB));

var nombre=prompt("como se llama?"," ")
console.log("hola "+nombre)
const coche = {
    marca: "Ford",
    modelo: "Escort",
    disponible: true 
}
console.table(coche)

function sumar (numero = 0, numero2 = 0){
    console.log(numero + numero2)
}

sumar (10, 20)
sumar(2, 3)
sumar (100)

function multi(n1, n2){
    return sumar(n1, n2)*2;
}
sumar (2, 5)
multi (2, 5)

function anterior (nume){
    console.log(nume-1)
}
anterior (10)

function doble(numer){
    console.log(numer*2)
}
doble(10)

function anteriordoble(numer){
    console.log((numer*2)-1)
}
anteriordoble(10)


function dineroinicial(dineroin){
    alert("Cantida de dinero en la cuenta: "+dineroin)
    do{
    let gasto = prompt ("¿Cúanto dinero desea gastar?: ")
    console.log("Usted ha gastado: "+gasto)
    console.log("le sobran: "+(dineroin-gasto))
    
}
   while(dineroin=0){
    alert("YA NO HAY DINERO")
   }

}
dineroinicial(100)
*/

/*
1- Crear funcion que se llame "anterior" y que muestre el valor previo
2- Crear funcion "doble" que muestre el doble de un valor
3- Crear funcion "Anterior del doble", combinando ambas funciones
4- Crear funcion que diga cuanto dinero me sobra a medida que se generan gastos y avise cuando llega a $0


function mayor(nu1, nu2){
    console.log(nu1, nu2)
    Math.max(nu1, nu2)    
    }
    console.log(`el numero mayor es: ${Math.max}`)

mayor(10, 20)


alert("Ejercicio 1");

function saludar(){
    alert("Buenos dias");
}
saludar();

alert("Ejercicio 2");

function suma(n1=0, n2=0){
    var resultado;
    var n1 = parseInt(prompt("Ingrese un numero: "));
    var n2 = parseInt(prompt("Ingrese un numero: "));
    resultado = n1+n2;

    alert("la suma entre el valor "+n1+" y el valor "+n2+" es: "+ resultado);
}
suma();

alert("Ejercicio 3");

function nombre(){
    let nombre = prompt("Ingrese nombre: ");

    alert("Hola, "+nombre);
}
nombre();

function cargarNumerosConDecimales(n1=0, n2=0, n3=0){
    var n1 = parseFloat(prompt("Ingrese un numero: "));
    var n2 = parseFloat(prompt("Ingrese un numero: "));
    var n3 = parseFloat(prompt("Ingrese un numero: "));

    var promedio;

    promedio = (n1+n2+n3)/3;

    alert("El promedio0 de los numeros ingresados es: "+promedio);
}
cargarNumerosConDecimales();
*/

/*crear una funcion llamada menu. La funcion menu debera mostrar lo siguiente: 
    ===MENU===

    1-Abrir
    2-mostrar
    3_salir

pero creando una llamada a la funcion abrir si se ingresa 1, otra la funcion mostrar si se ingresa 2, y por ultimo mostrar la funcion salir si se ingresa 3*/
/*
function menu() {
    let opcion;
    console.log("===MENÚ===")
    console.log("1- Abrir")
    console.log("2- Mostrar")
    console.log("3- Salir")
    opcion = prompt("Ingrese un numero: ");
    if (opcion == 1){
        abrir();
    }
    else if (opcion == 2){
        mostrar();
    }
    else if(opcion == 3){
        Salir();
    }
}
menu();
function abrir(){
    console.log("Abriendo.");
}
function mostrar(){
    console.log("Mostrando.");
}
function Salir(){
    console.log("Saliendo... ");
*/
//6- Completar el ejercicio 5, pero creando una llamada a la función Abrir si se ingresa un 1, otra
//a la función Mostrar si se ingresa un 2. Y por último a la función Salir si se ingresa un 3.

function mostrarMayor(){
    let a = parseFloat(prompt("Ingrese un numero: "));
    let b = parseFloat(prompt("Ingrese el segundo valor: "));
    let c = parseFloat(prompt("Introduzca el tercer valor: "));

    if(a>=b && b>=c){
        alert(a+" "+b+" "+c);
    }else if(a>=c && c>=b){
        alert(a+" "+c+" "+b);
    }else if(b>=a && c>=b){
        alert(b+" "+a+" "+c);
    }else if(b>=c && c>=a){
        alert(b+" "+c+" "+a);
    }else if(c>=b && b>=a){
        alert(c+" "+b+" "+a);
    }else if(c>=a && a>=b){
        alert(c+" "+a+" "+b);
    }
    return 0;
}
mostrarMayor();