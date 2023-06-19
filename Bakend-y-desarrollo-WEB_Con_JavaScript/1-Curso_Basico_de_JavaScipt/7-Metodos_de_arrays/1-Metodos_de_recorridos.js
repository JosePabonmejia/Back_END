var articulos =[
    {'nombre':'Bici','costo':3000},
    {'nombre':'TV','costo':2000},
    {'nombre':'Libro','costo':300},
    {'nombre':'Laptop','costo':500},
    {'nombre':'Teclado','costo':5000},
    {'nombre':'Audifonos','costo':5000}
];
//FILTER
var articulosfiltrados= articulos.filter(function (articulo) {
    return articulo.costo <= 500
});
//MAP
var nombrearticulos = articulos.map(function(articulo){
    return articulo.nombre
});
// .filter : nos permite filtrar solo los elementos que deseamos (según ciertos criterios) 
// y devolverlos en un nuevo array.
// .map : crea un nuevo array con los resultados de la llamada a la función indicada 
// aplicados a cada uno de sus elementos.
 