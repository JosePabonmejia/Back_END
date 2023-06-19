// find() : Devuelve el primer elemento del array que cumpla con la condición dada
// foreach() : Ejecuta lo que le definamos una vez por cada elemento de nuestro array
// some() : Comprueba si al menos un elemento del array cumple con la condición que le damos
// filter() : Devuelve todos los elementos del array que cumplan con la condición dada

var articulos =[
    {'nombre':'Bici','costo':3000},
    {'nombre':'TV','costo':2000},
    {'nombre':'Libro','costo':300},
    {'nombre':'Laptop','costo':500},
    {'nombre':'Teclado','costo':5000},
    {'nombre':'Audifonos','costo':5000}
];
//Find
var encuentraFind = articulos.find(function (articulos) {
    return articulos.nombre === "Laptop";//Regresa el articulo larptop
});
//ForEach
articulos.forEach(function(){
    console.log(articulo.nombre);//Imprime los nombres de los articulos dentro del array
});
//Some 
var articulosVaratos= articulos.some(function (articulos) {
    return articulos.costo <= 700;//Solo hara una validacion de verdadero o falso
})
