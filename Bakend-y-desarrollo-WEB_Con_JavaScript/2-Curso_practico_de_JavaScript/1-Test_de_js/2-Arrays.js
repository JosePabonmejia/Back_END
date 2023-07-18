//crea una funcion que pueda recibir cualquier array como parametro e imprima su 
//primer elemento 
let nombre = ['jose','ramiro','juan'];
function imprimir(nombre) {
    console.log( nombre[0]);
}
imprimir(nombre);


//Crea una funcion que pueda recibir cualquier array como parametro e imprima todos sus elementos 
//uno por uno 
let nombre=['jose','ramiro','pabon','mejia'];
function imprimir (nombre) {
    for (let index = 0; index < nombre.length; index++) {
        console.log(nombre[index]);
    }    
}
imprimir(nombre);

//Crea una funcion que pueda recibir cualquier objeto como parametro e imprimir todos sus
//elementos uno por uno 

let objerct = {
    'nombre':'jose',
    'apellido':'Pabon',
    'edad':28,
    'curso':3
}
function imprimirobj(objerct) {
    let array= Object.values(objerct);
    for (let index = 0; index < array.length; index++) {
        console.log(array[index]);        
    }

}
imprimirobj(objerct);

//Crea un objeto de subscripciones para servicio de streaming 

const sub ={
    free:'Plan gratuito',
    pro:'Plan pro',
    gold:'Plan gold',
    platino:'Plan platino'
}
function select(type) {
    if (sub[type]){
        console.log(sub[type]);
        return;
    }
    else{
    console.error('No existe ese servisio');
    }
}
select(prompt('introduce valor: '));
