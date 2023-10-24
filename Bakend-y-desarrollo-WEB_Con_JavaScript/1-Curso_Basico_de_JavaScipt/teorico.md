 # Java Script
 ## Tipos de datos 

     alert(typeof(12)) = NUMBER 
     alert(typeof("Doce")) = STRING 
     alert(typeof("true")) = BOOLEAN 
     alert(typeof(['JOSE',28,'Pabon',2023])) = OBJECT

## Variables y constantes 

    var nombre //Declarar
    var nombre ='jose';//Inicializar

    cons pi = 3.1416;

## Funciones 
* Funcion declarativa 

        function sumar (a,b){
            let sumar = a+b;
            console.log(sumar);
        }
        sumar(5,5);
    
* Funcion de exprecion se expresa con var

         var sumar = function(a,b){
            let sumar = a+b
            console.log(sumar);
        }
        sumar(2,2);
* Retorna el tipo de valor utilizando una funcion 

        export function solution(valor) {
        return (typeof (valor));
        }
        solution(2);

        function valor(){
            let n = parseInt(promt(introduce un valor para decirte el tipo:));
            alert(typeof(n));
        }
        valor()

## Scope
El alcance (scope) de una variable puede ser:

* Global:

        var miNombre = "Jose";

* Local:

        function nombre(){
            var miApellido = "Pabon";
            console.log(miNombre + " " + miApellido);
        }

        nombre(); //Devuelve "Diego De Granda"

* En todo el código podemos utilizar la variable global.
* Las variables locales sólo pueden ser accedidas 
* Dentro de la función en la que fueron declaradas.

## Hoisting
### ¿Qué es Hoisting?

En JavaScript, las declaraciones (por ejemplo, de variables o funciones) se mueven al principio de su scope o ámbito. Este comportamiento se conoce como hoisting y es muy importante tenerlo en cuenta a la hora de programar para prevenir posibles errores.<br>


Las funciones siempre se mueven arriba del scope. Por lo tanto, podemos elegir donde declararlas y usarlas.<br>

La declaración de las variables se mueven arriba del scope, pero no la asignación. Antes de usar una variable, habrá que crearla y asignarla.<br>

    //aqui se da el hoisting en las variables
    //donde la variable es usada antes de ser declarada
    //
    console.log(miNombre);
    var miNombre = "jose";

    hey();

    function hey() {
        console.log("hola " + miNombre);
    }

    var miNombre = "jose";

    //Lo ideal es que se declaren la funcines al inicio


## Coercion 

Explicita : cuando el lenguaje nos ayuda a cambiar de un tipo de valor a otro 
Implicita : cuando el nosotros forzamos a cambiar un tipo de valor a otro 

    //Ejemplos de Coerción:

    var a = 4 + "7"; //Convierte a 4 en un string y lo concatena con el "7", por esto regresa un string de valor "47"

    4 * "7"; //Convierte al "7" en un número y realiza la operación, por esto devuelve 28

    var a = 20;
    var b = a + ""; //Aquí concatenamos para convertir la variable a string (coerción implícita)
    console.log(b); 

    var c = String(a); //Aquí obligamos a la variable a convertirse en string (coerción explícita)
    console.log(c);

    var d = Number(c); //Aquí obligamos a la variable a convertirse en número (coerción explícita)
    console.log(d);
## Valores TRUE y FALSE

    //Ejemplos en los que Boolean devuelve Falso:
    Boolean(0); //false
    Boolean(null); //false
    Boolean(NaN); //false
    Boolean(undefined); //false
    Boolean(false); //false
    Boolean(""); //false

    //Ejemplos en los que Boolean devuelve verdadero:
    Boolean(1); //true para 1 o cualquier número diferente de cero (0)
    Boolean("a"); //true para cualquier caracter o espacio en blanco en el string
    Boolean([]); //true aunque el array esté vacío
    Boolean({}); //true aunque el objeto esté vacío
    Boolean(function(){}); //Cualquier función es verdadera también

## IF elseif y ?:

El if es una condicional la cual tiene dos caminos si y no, si se cumple la condicion 

    let numero = parseInt(prompt('Introduce un valor mayor a 500:'));
    if (numero>=500) {
        alert("El valor si es mayor a 500");
    }
    else{
        alert('El valor no es mayor a 500');
    }
* La forma de hacer un IF en una sola linea 
    
        let numero = parseInt(prompt('Introduce un valor mayor a 500:'));
        let resultado = numero>=500 ? alert('El valor si es mayor a 500') : alert('El valor no es mayor a 500');
       

* Else if con animales 

    
        let animal = prompt('Introduce a tu animal favorito: ');
        if (animal == "leon") {
            alert('El leon es el rey de la selva');
        }
        else if (animal=="perro") {
            alert('El perro es el mejor amigo del hombre');
        }
        else if (animal=="paloma") {
            alert('Que no se comen');
        }
        else if (animal=="tigre") {
            alert('El tigre siempre segundo');
        }
        else{
            alert('Lo siento, pero tu animal no se encuentra en la database');
        }

* Pirdra papel y tijeera 

        var op1 = "Piedra";
        var op2 = "Papel";
        var op3 = "Tijera";

        var resultado = function(user, cpu){
            if(user != cpu){
                if(user === op1 && cpu === op3){
                    console.log("el usuario GANO con "+ op1)
                }else if(user === op2 && cpu === op1){
                    console.log( "el usuario GANO con " + op2)
                }else if(user === op3 && cpu === op2){
                    console.log("el usuario GANO con " + op3)
                }else{
                    console.log("La CPU Gano!!")
                }
            }else if(user === cpu){
                console.log("Empate")
            }
        };

        resultado(op1,op3) //el usuario GANO con Piedra```

## Switch 

Muy parecido al if pero este tiene casos 

    let animal = prompt('Introduce a tu animal favorito: ');
    switch (animal) {
        case 'leon':
            alert('El leon es el rey de la selva');
            break;
        case 'perro':
            alert('El perro es el mejor amigo del hombre');
            break;
        case 'paloma':
            alert('Que no se comen');
            break;
        case 'tigre':
            alert('El tigre siempre segundo');
            break;

        default:
            alert('Lo siento, pero tu animal no se encuentra en la database');
            break;
    }
## Array 

Un Array es un tipo de estructura de datos, objeto. Puede guardar datos distintos dentro, guarda los datos en forma de lista.

    var frutas = ['pera','manzana','papaya','platano'];
    alert(frutas.length);   
### Metodos

* lenght devuelve la longitud del array.
* push() agrega elementos al final de array.
* pop() elimina un elemento del array.
* unshift() agrega un elemento al array, pero lo agrega en primer lugar.
* shift() **elimina el elemento que está en el inicio del array.
* indexOf ** devuelve la posición de un elemento del array.


* Push

        var frutas = ['pera','manzana','papaya','platano'];
        var nuevas_frutas = ['sandia','frutilla'];

        frutas.push(nuevas_frutas);//Push

        alert(frutas);


## FOR Y FOR OF...  
Los bucles pueden ejecutar un bloque de código varias veces. JavaScript admite diferentes tipos de bucles:

* for - recorre un bloque de código varias veces

* for/in - recorre las propiedades de un objeto

* for/of - recorre los valores de un objeto iterable

* while - recorre un bloque de código mientras se cumple una condición específica

* do/while - también recorre un bloque de código mientras se cumple una condición específica

### For
        var estudiantes= ['jose','raul','maria'];
        let nuevo = prompt('Nuevo');
            estudiantes.push(nuevo);
        function saludar(estudiantes) {
            alert(`Bienvenido, ${estudiantes}`);
            
        }

        for (let i = 0; i < estudiantes.length; i++) {
            saludar(estudiantes[i]);
            
        }

### For of 

    var estudiantes= ['jose','raul','maria'];
    let nuevo = prompt('Nuevo');
        estudiantes.push(nuevo);
    function saludar(estudiantes) {
        alert(`Bienvenido, ${estudiantes}`);
        
    }

    for (const estudiante of estudiantes) {
        saludar(estudiante);
    }

## while 

    var estudiantes = ['jose','david','fernanda'];
    function saludar(estudiante) {
        console.log(`Hola, ${estudiante}`);
    }
    while (estudiantes.length >0) {
        var estudiante = estudiantes.shift();
        saludar(estudiante);
    }

## Objetos

    var carros ={
        marca:'Toyota',
        modelo:'Corolla',
        precio:5000,
        anio:2020,
        modelo: function() {
            console.log(`El precio del vehiculo es de ${this.precio}`)
        }
    };
    carros.marca;
    carros.modelo();
    console.log(`El vehiculo es de la marca : ${carros.marca}`);

## Funciones constructoras 

    var carros = [];
    function carro(MARCA,MODELO,ANIO) {
        this.marca=MARCA; 
        this.modelo=MODELO; 
        this.anio=ANIO; 
    }
    var n = parseInt(prompt('Numero de carros que quieres registrar: '))

    for (let i = 0; i< n ; i++) {
        var marca = prompt('Introduce una marca');
        var modelo = prompt('Introduce un modelo');
        var anio = prompt('Introduce un año');
        carros.push(new carro(marca,modelo,anio));//palabra clave antes de invocar la funcion NEW
        
    }
    console.log(carros);

## Metodos de recorridos de arrays 

    var articulos = [
	{ nombre: 'celular', precio: 1000 },
	{ nombre: 'laptop', precio: 1500 },
	{ nombre: 'tablet', precio: 2000 },
	{ nombre: 'teclado', precio: 100 },
	{ nombre: 'mouse', precio: 70 },
	{ nombre: 'carro', precio: 30000 },
    ];
Para poder extaer datos de un objeto debemos crear metodos con una funcion 

* Método Filter

        var articulosFiltrados = articulos.filter(function(articulo) {
            return articulo.precio <= 500;
        });
* ojo no se puede utilizarlo para extraer todos los valores de un atributo para eso nos sirve Map
        
        //Se supone que deberia mostrarnos solo los nombres de los articulos pero nos regresa todo el objeto
        var articulos_nombres = articulos.filter(function (nombres) {
        return nombres.nombre;
        });

* Método Map
        
        var nombreArticulos = articulos.map(function(articulo) {
            return articulo.nombre;
        });

        articulosFiltrados;
        // (2) [{…}, {…}]
        //   0: {nombre: "⌨️", precio: 100}
        //   1: {nombre: "🖱", precio: 70}

        nombreArticulos; // (5) ["📱", "💻", "🖥", "⌨️", "🚗"]

* Metodo Find 

        var nombres_articulos = articulos.find(function (nombres) {
        return nombres.nombre === 'carro';
        });

* Metodo For each 

        articulos.forEach(function (articulo) {
        console.log(articulo.nombre);
        });

* Metodo Some solo retorna true o false que al pedo no? (►__◄)

        var articulosFiltrados = articulos.some(function(articulo) {
            return articulo.precio <= 500;
        });

###  Eliminando elementos de un Array

    var array = ['jose','juan','pedro'];

    Agregar al final= array.push('fernanda');
    Eliminar al final= array.pop();//fernanda
    Agregar al inicio= array.unshift('ana');
    Eliminar al inicio= array.shift()//ana
    
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀


⠀⠀⠀⠀⠀⣤⠟⠻⠻⢷⣬⡉⠳⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⢀⣼⢛⡠⢀⠀⠈⢿⣿⠧⠘⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣤⣤⣤⣤⣄⡀⠀⠀
⠀⠀⢀⡾⠑⠉⠀⠀⠀⠀⠀⢻⣿⢤⡘⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣤⡶⢟⣩⣵⣶⠶⠶⣌⠛⣦⠀
⠀⢀⡾⠁⠈⠐⠀⠠⠀⠂⠀⠈⣿⣶⠹⣌⢷⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡿⢏⣧⣿⠟⡁⠠⢀⠀⢳⡼⣧
⣼⣿⠃⠌⠁⠠⠀⠄⡀⠄⡐⠀⣹⣿⡣⠿⣦⡛⢦⡀⠀⣀⣤⣤⣶⢾⣟⡻⠶⠶⠶⣶⣤⣴⢾⣿⢿⢫⡜⣣⣿⠁⠠⢀⡐⢠⠀⠌⣗⣿
⣹⡏⡐⠠⠀⢀⠐⠠⠐⢀⠰⠀⢼⣿⡗⣭⢚⡿⣦⣽⣿⢏⡻⢇⡻⢥⡛⡽⣩⢛⠿⠿⣷⣾⣿⣱⣎⠳⣾⡿⠃⢀⠂⠤⢀⠡⠂⠈⣿⣿
⣿⣶⠁⠐⠀⡀⠂⠄⠁⢂⠐⠂⣽⣿⠳⣬⡓⢮⡕⣫⠜⣧⣙⢮⡱⢣⣝⡲⢥⢏⣏⠳⣜⢦⣣⡝⣿⣿⣿⠁⠀⠄⢊⠐⡈⠐⡈⠆⡅⣧
⣿⡟⠀⢈⠀⢀⡐⠈⢀⠂⠡⣸⣿⣏⢳⢥⡛⡵⣚⣥⠻⡴⣩⢶⣙⣧⢎⡵⣋⠞⣬⢛⡜⢮⣕⡺⣵⣿⣿⣶⣁⠌⠠⢁⠤⠑⠠⣈⣇⣿
⣿⡧⠀⠐⠀⡘⣿⡁⠄⡈⣴⣿⠟⣬⢳⢣⣛⡴⢳⡜⣳⢣⣿⣿⡿⣻⣿⡶⣍⠞⣥⢏⡞⣣⢮⣿⡿⣛⣯⢟⣿⣦⡅⠂⡔⠡⠒⡐⣾⣗
⣿⡟⠀⠈⠄⠀⢹⢿⣶⣾⣿⣟⡹⢎⡽⣓⢮⡜⣳⠺⣕⣻⣿⣿⣿⣷⣟⡲⣍⢞⡱⣎⢞⡱⣮⣿⣿⣷⣿⢯⣜⣻⣷⡔⡨⢁⢰⡇⣿⡟
⣿⣗⠀⠐⡈⢀⠂⢀⠀⣿⣿⡰⣹⢭⠶⣹⢎⣞⡱⢻⡜⣿⣿⠻⣌⢿⡳⢳⡜⢮⡱⡞⣬⣿⣿⢣⢧⢻⣿⡳⣎⣗⣻⣿⡕⠀⣺⢡⡏⠷
⣿⣿⠀⢀⠀⡀⠌⠠⢀⣿⣧⠳⣭⢎⡳⡝⢮⠶⣙⢧⣻⣿⣏⢳⠭⡞⣭⢓⡞⣣⡝⡞⡴⣋⠶⣩⢎⡟⣻⡟⡼⢶⣹⣿⣇⠘⢏⡼⠀⠀
⣿⡟⡀⠀⠄⡐⠀⠁⡘⣿⡔⣫⠶⣩⢳⡝⣫⠞⣭⠶⡽⢳⣌⢏⡾⣕⢮⣿⡼⣱⢚⣝⡲⣍⡳⣍⡞⣼⡱⢮⠵⣓⠮⣽⣿⣠⠟⠀⠀⠀
⢹⣧⣶⠀⠀⡐⠀⠄⢘⣯⠲⣥⢛⣬⢓⡞⣱⡛⣦⢛⡜⣣⠞⣬⣿⣏⢾⣿⢲⠥⣏⠶⣱⢮⣵⣿⣾⡿⣱⢋⡞⣭⢓⣿⢻⡏⠀⠀⠀⠀
⠀⠻⡟⣆⠀⢀⠂⠄⢨⡗⡹⢆⡏⣖⢫⠼⣱⡙⢶⡩⢞⡥⣻⣾⣿⣿⣿⣿⣧⣛⢬⠳⣽⣾⣿⣯⣿⡷⣡⠻⡜⢦⣋⣾⢸⡇⠀⠀⠀⠀
⠀⠀⢻⡜⠄⠠⠀⠐⣠⢯⡱⢋⡼⡌⢧⡛⡴⣹⢲⡙⣎⢖⣿⣯⣴⣿⡯⢸⣿⡜⢮⢽⡿⢡⣾⡏⢿⣗⡣⢏⡝⢦⣣⣿⢹⡇⠀⠀⠀⠀
⠀⠀⠀⠻⣦⡠⠁⠂⢬⠷⡱⣍⢲⡙⢦⡝⡲⢥⢣⡛⡜⣞⣿⣿⢿⣿⣧⣾⣿⡜⣣⢾⣷⣿⣿⣷⣿⣿⣘⢧⡹⢖⣱⣿⣾⠁⠀⠀⠀⠀
⠀⠀⠀⠀⠈⠻⣦⡀⣼⡳⡱⢎⣣⢛⡦⡹⢜⠣⢧⡹⡜⢦⡹⢿⣿⠟⠋⠙⢋⣽⣿⣾⠿⣯⣿⣿⣿⣿⡿⢎⡕⣫⢾⡟⣿⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠈⠳⣌⢳⣝⢎⡲⢭⢲⡹⣌⡛⢦⣓⡹⢦⣹⣾⠏⠀⣴⣿⣿⣿⣿⣷⠀⠀⠉⢨⣿⡛⣬⢳⡸⣱⣾⣯⣿⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠙⣷⣻⣮⠳⣍⠶⡱⢎⡹⢆⢧⣓⢣⣾⡏⠀⠘⣿⣿⣿⣿⣿⣿⠃⠀⠀⣿⣿⠱⣆⢧⡓⣥⣿⣿⡏⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⣿⢷⣮⣱⡝⢮⣱⣋⣶⣽⣿⡏⠀⠀⠀⠉⠛⠿⠛⠛⠁⠀⠀⠀⣿⣧⢛⢬⢲⣹⣾⣷⠏⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⣠⡤⣴⡶⠟⣿⢿⡿⣿⣿⡟⠛⠉⠉⠹⣿⣷⣤⣤⣤⣤⣴⣤⣄⣤⣠⣤⣶⣿⣿⣯⣶⣿⣯⠞⠁⠀⠀⠀⠀⠀⠀⠀
⠀⣀⡠⠀⠒⠚⢛⠿⣳⢻⡹⡹⣌⡳⣜⢦⡛⢿⣶⣄⢲⡀⠙⢿⣿⡿⢿⣿⣿⣿⣿⣿⡿⢟⣻⣿⣿⡿⢿⣏⣛⠷⣤⡀⠀⠀⠀⠀⠀⠀
⠚⣩⣴⣶⢫⣙⢎⡳⢥⢣⢳⡱⢎⡵⣚⢦⡛⢮⡜⡻⢿⠿⣷⣌⠹⣷⣾⣼⣧⣷⡾⠛⢁⣼⣿⣿⡱⢎⡣⢎⡝⣳⢦⣙⠳⣄⣀⠀⠀⠀
⠙⠶⣽⠍⠳⠍⠮⡱⣋⣮⠣⠝⠎⠶⠩⠖⠹⠦⠹⠱⠋⠼⠩⠟⢷⣶⣭⣉⣉⣉⣠⣶⡿⠟⣿⡟⠱⠫⠜⠣⠞⠱⠎⠝⠣⠤⠌⠛⣦⣀



⣿⣿⣿⣿⣿⠛⣠⣄⣄⡈⠓⢶⣌⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⡿⠃⡤⢟⡿⣿⣷⡀⠀⣘⣧⠘⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠛⠛⠛⠻⢿⣿⣿
⣿⣿⡿⢁⣮⣶⣿⣿⣿⣿⣿⡄⠀⡛⢧⠘⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⢉⡠⠖⠊⠉⣉⣉⠳⣤⠙⣿
⣿⡿⢁⣾⣷⣯⣿⣟⣿⣽⣿⣷⠀⠉⣆⠳⡈⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⠁⠀⢀⡰⠘⠀⣠⢾⣟⡿⣿⡌⢃⠘
⠃⠀⣼⣳⣾⣟⣿⣻⢿⣻⢯⣿⠆⠀⢜⣀⠙⢤⡙⢿⣿⠿⠛⠛⠉⡁⠠⢄⣉⣉⣉⠉⠛⠋⡁⠀⡀⡔⢣⠜⠀⣾⣟⡿⢯⡟⣿⣳⠨⠀
⠆⢰⢯⣟⣿⡿⣯⣟⣯⡿⣏⣿⡃⠀⢨⠒⡥⢀⠙⠂⠀⡰⢄⡸⢄⡚⢤⢂⠖⡤⣀⣀⠈⠁⠀⠎⠱⣌⠁⢀⣼⡿⣽⣛⡿⣞⣽⣷⠀⠀
⠀⠉⣾⣯⣿⢿⣽⣻⣾⡽⣯⣽⠂⠀⣌⠓⢬⡑⢪⠔⣣⠘⠦⡑⢎⡜⠢⢍⡚⡰⠰⣌⠣⡙⠜⢢⠀⠀⠀⣾⣿⣻⡵⣯⢷⣯⢷⣹⢺⠘
⠀⢠⣿⡷⣿⡿⢯⣷⡿⣽⣞⠇⠀⠰⡌⡚⢤⢊⠥⠚⣄⢋⠖⡉⠦⠘⡱⢊⠴⣡⠓⡤⢣⡑⠪⢅⠊⠀⠀⠉⠾⣳⣟⡾⣛⣮⣟⠷⠸⠀
⠀⢘⣿⣯⣿⢧⠀⢾⣻⢷⠋⠀⣠⠓⡌⡜⠤⢋⡌⢣⠌⡜⠀⠀⢀⠄⠀⢉⠲⣡⠚⡰⢡⠜⡑⠀⢀⠤⠐⡠⠀⠙⢺⣽⢫⣞⣭⢯⠁⠨
⠀⢠⣿⣷⣻⣿⡆⡀⠉⠁⠀⠠⢆⡱⢂⠬⡑⢣⠌⣅⠪⠄⠀⠀⠀⠈⠠⢍⠲⡡⢎⠱⡡⢎⠑⠀⠀⠈⠀⡐⠣⠄⠈⢫⢗⡾⡏⢸⠀⢠
⠀⠨⣿⣯⢷⡿⣽⡿⣿⠀⠀⢏⠆⡒⣉⠆⡱⠡⢎⡄⢣⠀⠀⣄⠳⡀⢌⡌⢣⡑⢎⢡⠓⠀⠀⡜⡘⡄⠀⢌⠱⠨⠄⠀⢪⣿⠅⡞⢰⣈
⠀⠀⣿⡿⣿⢿⣳⣟⡿⠀⠘⣌⠒⡱⢌⢢⡑⣉⠦⡘⠄⠀⠰⡌⣒⢡⠒⡬⢡⠜⢢⢡⢋⠴⣉⠖⡱⢠⠄⢠⢃⡉⠆⠀⠸⣧⡰⢃⣿⣿
⠀⢠⢿⣿⣻⢯⣿⣾⢧⠀⢫⠔⣉⠖⡌⢢⠔⣡⠒⣉⢂⡌⠳⡰⢁⠪⡑⠀⢃⠎⡥⠢⢍⠲⢌⠲⢡⠃⢎⡑⣊⠬⣑⠂⠀⠟⣠⣿⣿⣿
⡆⠘⠉⣿⣿⢯⣿⣻⡧⠐⣍⠚⡤⠓⡬⢡⠎⢤⠙⡤⢣⠜⣡⠓⠀⠰⡁⠀⡍⣚⠰⣉⠎⡑⠊⠀⠁⢀⠎⡴⢡⠒⡬⠀⡄⢰⣿⣿⣿⣿
⣿⣄⢠⠹⣿⡿⣽⣻⡗⢨⢆⡹⢰⠩⡔⣃⠎⢦⡉⢖⡡⢚⠄⠁⠀⠀⠀⠀⠘⠤⡓⣌⠂⠁⠀⠐⠀⢈⠞⣄⢣⡙⠴⠁⡇⢸⣿⣿⣿⣿
⣿⣿⡄⢣⣻⣟⣿⣯⠟⡐⢎⡴⢃⢳⡘⢤⢋⠆⡍⢦⠱⡩⠀⠐⠋⠀⢐⡇⠀⢣⡑⡂⢀⡞⠁⢰⡀⠨⢜⡰⢢⡙⠜⠀⡆⢸⣿⣿⣿⣿
⣿⣿⣿⣄⠙⢟⣾⣽⡓⣈⢎⠲⡍⢦⡙⢢⢍⡚⡜⢤⢣⠡⠀⠀⡀⠀⠘⠁⠀⢣⠜⡁⠈⠀⠀⠈⠀⠀⠧⡘⢆⡩⠎⠀⠁⣾⣿⣿⣿⣿
⣿⣿⣿⣿⣷⣄⠙⢿⠃⢌⢎⡱⠜⡤⢙⢆⡣⣜⡘⢆⢣⡙⢆⡀⠀⣠⣴⣦⡴⠂⠀⠁⣀⠐⠀⠀⠀⠀⢀⡱⢪⠔⡁⢠⠀⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣷⣌⠳⡌⠢⡱⢍⡒⡍⢆⠳⢤⡙⠬⢆⡙⠆⠁⣰⣿⠋⠀⠀⠀⠀⠈⣿⣿⣶⡗⠀⢤⠓⡌⢇⠎⠁⠐⠀⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣦⠈⠄⠑⣌⠲⣉⢎⡱⢆⡹⡘⠬⡜⠁⢰⣿⣧⠀⠀⠀⠀⠀⠀⣼⣿⣿⠀⠀⣎⠹⡘⢬⠚⠀⠀⢰⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣄⠀⡈⠑⠎⢢⡑⠎⠴⠉⠂⠀⢰⣿⣿⣿⣶⣤⣀⣤⣤⣾⣿⣿⣿⠀⠘⡤⡓⡍⠆⠁⠈⣰⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⠟⢛⠋⢉⣠⠀⡀⢀⠀⠀⢠⣤⣶⣶⣆⠀⠈⠛⠛⠛⠛⠋⠛⠻⠛⠟⠛⠉⠀⠀⠐⠉⠀⠐⣡⣾⣿⣿⣿⣿⣿⣿⣿
⣿⠿⢟⣿⣭⣥⡤⣀⠌⡄⢆⢆⠳⢌⠣⡙⢤⡀⠉⠻⡍⢿⣦⡀⠀⢀⡀⠀⠀⠀⠀⠀⢀⡠⠄⠀⠀⢀⡀⠰⠤⣈⠛⢿⣿⣿⣿⣿⣿⣿
⣥⠖⠋⠉⡔⠦⡱⢌⡚⡜⡌⢎⡱⢊⠥⡙⢤⡑⢣⢄⡀⣀⠈⠳⣆⠈⠁⠃⠘⠈⢁⣤⡾⠃⠀⠀⢎⡱⢜⡱⢢⠌⡙⠦⣌⠻⠿⣿⣿⣿
⣦⣉⠂⣲⣌⣲⣑⢎⠴⠑⣜⣢⣱⣉⣖⣩⣆⣙⣆⣎⣴⣃⣖⣠⡈⠉⠒⠶⠶⠶⠟⠉⢀⣠⠀⢠⣎⣔⣣⣜⣡⣎⣱⣢⣜⣛⣳⣤⠙⠿



⠀