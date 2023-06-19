//Funcion registro
function cafe(NOMBRE,PRECIO,STOCK) {
    this.nombre=NOMBRE,
    this.precio=PRECIO,
    this.stock=STOCK
};
let cafes=[];
for (let index = 0; index < 1; index++) {
    NONBRE=prompt('Nombre');
    PRECIO=prompt('Precio');
    STOCK=prompt('Stock');
    cafes.push(new cafe(NOMBRE,PRECIO,STOCK));
}