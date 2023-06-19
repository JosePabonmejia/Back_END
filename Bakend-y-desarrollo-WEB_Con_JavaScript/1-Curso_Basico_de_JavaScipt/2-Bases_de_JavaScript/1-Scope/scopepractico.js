let miNombre = "jose";//Scope global
function nombre() {
    let apellido="pabon";//Scope local
    console.log(miNombre+" "+ apellido);
}
nombre();   