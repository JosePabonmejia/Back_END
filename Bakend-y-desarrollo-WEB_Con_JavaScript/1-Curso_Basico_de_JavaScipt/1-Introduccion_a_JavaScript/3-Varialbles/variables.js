let valor=1;
typeof valor;
console.log = typeof valor;

// Qué es una variable en JavaScript
// Una variable es la representación de un lugar que reservamos en memoria para guardar un valor. 
// El valor puede ser cualquier tipo de dato, inclusive objetos o funciones.

// Declaración y asignación de variables en JavaScript
// En JavaScript, una variable se crea con la palabra reservada var, seguido del nombre de la variable. 
// Esto se denomina declaración.
// var nombre
// De esta manera, existirá un espacio en memoria que haga referencia a la variable nombre, 
// pero por defecto tendrá un valor undefined.Para guardar un valor en esa variable, 
// se utiliza el símbolo de igual ( =) , seguido del valor. Esto se denomina asignación.
// var nombre
// nombre = "JavaScript"
// Se puede declarar y asignar en una misma línea, sin repetir el nombre de la variable. 
// A esto se le dice inicializar una variable.
// var nombre = "JavaScript"
// Cómo acceder a una variable
// Una vez que hayas declarado y asignado un valor a una variable, ya puedes emplear en tu código usando su nombre,
// sin la necesidad de escribir nuevamente var.
// var nombre = "JavaScript"

// console.log(nombre) //"JavaScript"

// Dentro de JavaScript tenemos tres formas de declarar una variable las cuales son: var, const y let.

// Var: Era la forma en que se declaraban las variables hasta ECMAScript 5. Casi ya no se usa porque es de forma global y tiene las siguientes características:

// o Se puede reinicializar: osea todas las variables se inicializan, por ejemplo:
// Var pokemonType = ‘electric’ entonces reinicializar es:
// Var pokemonType = ‘grass’ osea la misma variable con diferentes datos el último dato predomina.
// o Se puede reasignar: osea la variable ya inicializada le reasignamos otro valor por ejemplo: inicializamos la variable: Var pokemonType = ‘electric’ ahora la reasignamos pokemonType = ‘grass’ ya no va var
// o Su alcance es función global: osea inicializamos la variable, pero la podemos llamar desde cualquier bloque (una llave abierta y una cerrada {}) pero hay que tener mucho cuidado con ello ya que puede haber peligro, no es recomendable usar VAR.

// const y let es la forma en que se declaran las variables a partir de ECMAScript 6,

// const: sirve para declarar variables que nunca van a ser modificadas:
// o No se puede reinicilizar: es una const única no puede haber otra inicializada con el mismo nombre. const pokemonType = ‘electric’ no puede haber:
// const pokemonType = ‘grass’
// o No se pude re asignar: una vez que la hayamos inicializado no la podemos reasignar solo con su nombre: const pokemonType = ‘electric’ no puede ejecutarse:
// pokemonType = ‘grass’
// o No es inmutable: osea no puede cambiar con objetos:

// Let: Son variables que pueden ser modificadas, se pueden cambiar:
// o No se puede reinicilizar: es una const única no puede haber otra inicializada con el mismo nombre. let pokemonType = ‘electric’ no puede haber:
// let pokemonType = ‘grass’
// o Se puede reasignar: Osea la variable ya inicializada le reasignamos otro valor por ejemplo: inicializamos la variable: let pokemonType = ‘electric’ ahora la reasignamos pokemonType = ‘grass’
// o Su contexto de es bloque: Solo funciona dentro de un bloque {}, fuera de ello no.
