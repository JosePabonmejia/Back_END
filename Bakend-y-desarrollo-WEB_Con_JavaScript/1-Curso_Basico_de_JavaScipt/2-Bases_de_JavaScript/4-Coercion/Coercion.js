//Crea una funcion que permita registrar n productos 
function producto(nombre,precio,cantidad) {
    this.nombre=nombre
    this.precio=precio
    this.cantidad=cantidad
}
let productos=[];
let n=prompt('Cuantos productos deceas registrar');
for (let index = 0; index < n; index++) {
    nombre = prompt('Nombre');
    precio = prompt('Precio');
    cantidad = prompt('Cantidad');
    productos.push(new producto(nombre,precio,cantidad));
}
for (let index = 0; index < productos.length; index++) {
    console.log(productos[index]);    
}