Responde 

¿Qué es una variable y para qué sirve?
R. Una variable es un campo el cual especificamos dandole un nombre  y luego le podemos asignar sierto valor 
¿Cuál es la diferencia entre declarar e inicializar una variable?
R. Cuando de claramos solo le damos un nombre a la variable en camnio cuando la inicializamos le asignamos sierto valor 
Ej: estudiantes=; valor1= 12;
¿Cuál es la diferencia entre sumar números y concatenar strings?
R. Que los numeros se pueden sumar por que son valores numricos mientras que los strigs no se sumaran solo se concatenan

¿Cuál operador me permite sumar o concatenar?

+

Determina el nombre y tipo de dato para almacenar en variables la siguiente información:
Nombre = string 
Apellido = string
Nombre de usuario en Platzi = string
Edad = Number 
Correo electrónico = string
Mayor de edad =  Boolean
Dinero ahorrado = number 
Deudas = number 

Traduce a código JavaScript las variables del ejemplo anterior y deja tu código en los comentarios.

let nombre = 'jose';
let Apellido = 'Pabon';
var edad = 27;
let correo = 'josefolooo@gmail.com';
let mayor = true;
let dAhorro =12000;
let dDeuda =12000;

Calcula e imprime las siguientes variables a partir de las variables del ejemplo anterior:
Nombre completo (nombre y apellido)
Dinero real (dinero ahorrado menos deudas)


let Gmoney= 20000; 
let Dmoney= 1000;
let Rmoney= Gmoney-Dmoney;

let nombrecompleto = ['jose','pabon'];
console.log('Mi nombre completo es, '+nombrecompleto );
console.log('Dinero real es :, '+Rmoney );

Responde las siguientes preguntas en la sección de comentarios:
¿Qué es una función?
R. Es quel conjunto de codigo que realiza una tarea definida segun los parametros que le introducimos 
esta es creada con el objetivo de no repetir codigo similar, o en otras palabras todo 
conjunto de codigo que deba repetirse mas de una vez merece convertirce en una funcion
¿Cuándo me sirve usar una función en mi código?
R. Para no repetir demaciado codigo 
¿Cuál es la diferencia entre parámetros y argumentos de una función?
los parametros son datos que nosotros mandamos a la funcion para que esta nos retorne algo 
y los argumentos setan los campos que ocuparan esas parametros 

Convierte el siguiente código en una función, pero, cambiando cuando sea necesario las variables constantes por parámetros y argumentos en una función:
const name = "Juan David";
const lastname = "Castro Gallego";
const completeName = name + lastname;
const nickname = "juandc";

console.log("Mi nombre es " + completeName + ", pero prefiero que me digas " + nickname + ".");

function imprimir(nombre,apellido,nick) {
    let nombrecompleto=nombre+" "+apellido;
    console.log("Mi nombre es "+nombrecompleto + " pero prefiero que me llamen "+nick);
}
imprimir('Juan David','Castro Gallego','juandc');

Responde las siguientes preguntas en la sección de comentarios:
¿Qué es un condicional?
R. Como su nombre lo dice se trata de una condicion la cual como resultado obterndremos un valor booleano, osea true o false
depende de si la condicion se cumpla o no 

¿Qué tipos de condicionales existen en JavaScript y cuáles son sus diferencias?
R. Tenemos switch, if, elseif , etc 
¿Puedo combinar funciones y condicionales?
R. Pero claro que si shicooooo

Replica el comportamiento del siguiente código que usa la sentencia switch utilizando if, else y else if:
const tipoDeSuscripcion = "Basic";

switch (tipoDeSuscripcion) {
   case "Free":
       console.log("Solo puedes tomar los cursos gratis");
       break;
   case "Basic":
       console.log("Puedes tomar casi todos los cursos de Platzi durante un mes");
       break;
   case "Expert":
       console.log("Puedes tomar casi todos los cursos de Platzi durante un año");
       break;
   case "ExpertPlus":
       console.log("Tú y alguien más pueden tomar TODOS los cursos de Platzi durante un año");
       break;
}

let tipoDeSuscripcion ='ExpertPlus';

if (tipoDeSuscripcion=='Free') 
{
    console.log("Solo puedes tomar los cursos gratis");
}
else if (tipoDeSuscripcion == "Basic")
{ 
        console.log("Puedes tomar casi todos los cursos de Platzi durante un mes");
}
else if (tipoDeSuscripcion=="Expert")
{
        console.log("Puedes tomar casi todos los cursos de Platzi durante un año");
}
else if ( tipoDeSuscripcion=="ExpertPlus")
{
        console.log("Tú y alguien más pueden tomar TODOS los cursos de Platzi durante un año");
}

Replica el comportamiento de tu condicional anterior con if, else y else if, pero ahora solo con if (sin else ni else if).
💡 Bonus: si ya eres una experta o experto en el lenguaje, te desafío a comentar cómo replicar este comportamiento con arrays u objetos y un solo condicional.

let tipoDeSuscripcion ='ExpertPlus';

if (tipoDeSuscripcion=='Free') 
{
    console.log("Solo puedes tomar los cursos gratis");
}
 if (tipoDeSuscripcion == "Basic")
{ 
        console.log("Puedes tomar casi todos los cursos de Platzi durante un mes");
}
 if (tipoDeSuscripcion=="Expert")
{
        console.log("Puedes tomar casi todos los cursos de Platzi durante un año");
}
 if ( tipoDeSuscripcion=="ExpertPlus")
{
        console.log("Tú y alguien más pueden tomar TODOS los cursos de Platzi durante un año");
}

let typeSuscripción = [
    "Free",
    "Basic", 
    "Expert", 
    "ExpertPlus"
    ];
    let infoSuscripción = [
    "solo puedes tomar los cursos gratis", 
    "puedes tomar casi todos los cursos de Platzi durante un mes", 
    "puedes tomar casi todos los cursos de Platzi durante un año", 
    "tú y alguien más pueden tomar TODOS los cursos de Platzi durante un año"];
    let userSuscription = "Expert";
    for (let i=0; i < typeSuscripción.length; i++) {
      if (userSuscription == typeSuscripción[i]) {
          console.log(`Si estas suscrito al plan ${typeSuscripción[i]} en el cual ${infoSuscripción[i]}`)
      }
    }


//Con objects
let typeSuscripcion = {
       Free:"solo puedes tomar los cursos gratis",
       Basic:"puedes tomar casi todos los cursos de Platzi durante un mes",
       Expert:"puedes tomar casi todos los cursos de Platzi durante un año",
       ExpertPlus:"tú y alguien más pueden tomar TODOS los cursos de Platzi durante un año",
       imprimir: function () {
        console.log('Servicio Free ${this.Free}');
       }
};
imprimir=true;


Responde las siguientes preguntas en la sección de comentarios:
¿Qué es un ciclo?
Un cliclo es aquillo que se repite de manera continua, es tambien conocido como un bucle 
¿Qué tipos de ciclos existen en JavaScript?
Existen el for, foreach, while do while 
¿Qué es un ciclo infinito y por qué es un problema?
El ciclo while es un ciclo infinito es un problema ya que es un proceso que la computadora realizara infinitamente y eso dificultaria el desempenio del procesador del equipo

¿Puedo mezclar ciclos y condicionales?
siempre 

Replica el comportamiento de los siguientes ciclos for utilizando ciclos while:
for (let i = 0; i < 5; i++) {
    console.log("El valor de i es: " + i);
}

for (let i = 10; i >= 2; i--) {
    console.log("El valor de i es: " + i);
}

//My Solution
let i = 0;
while (i < 5) {
  i++;
  console.log(`El valor de i es: ${i}`)
}
let i = 10;
while (i >= 2) {
  i--;
  console.log(`El valor de i es: ${i}`)
}
Escribe un código en JavaScript que le pregunte a los usuarios cuánto es 2 + 2. Si responden bien, mostramos un mensaje de felicitaciones, pero si responden mal, volvemos a empezar.
💡 Pista: puedes usar la función prompt de JavaScript.
//Basic Math Quiz
let num = 10;
let num2 = 10;
const result = num + num2;
let questions = {
  q1: `Cuanto es ${num} + ${num2}`
}
functionQuizzer() {
  let userInput = prompt(questions.q1);
  if (userInput == result) {
    alert("Felicitaciones, respondiste correctamente el desafio 😎");
  } else {
    alert("lamentablemente, tu respuesta es incorrecta, sigue practicando ❌!");
  }
}
Quizzer();

Responde las siguientes preguntas en la sección de comentarios:
¿Qué es un array?
R. Es un contenedor de datos el cual nos permite almacenar uno o mas datos 
¿Qué es un objeto?
R. Es una manera de ver a toda una funcion por lo general los objetos 
¿Cuándo es mejor usar objetos o arrays?
¿Puedo mezclar arrays con objetos o incluso objetos con arrays?


Crea una función que pueda recibir cualquier array como parámetro e imprima su primer elemento.
let myArray = ['Manchester', 'London', 'Liverpool', 'Birmingham', 'Leeds', 'Carlisle'];
functionreadArray(array){
	console.log(array[0])
}
readArray(myArray);


Crea una función que pueda recibir cualquier array como parámetro e imprima todos sus elementos uno por uno (no se vale imprimir el array completo).
let myArray = ['Manchester', 'London', 'Liverpool', 'Birmingham', 'Leeds', 'Carlisle'];
functionreadArray(array) {
  for (let i = 0; i < array.length; i++) {
    console.log(`${i + 1}${array[i]}`)
  }
}
readArray(myArray);

Crea una función que pueda recibir cualquier objeto como parámetro e imprima todos sus elementos uno por uno (no se vale imprimir el objeto completo).
let myCar = {
  make: 'Ford',
  model: 'Mustang',
  year: 1969
};
functionreadObject(object) {
  for (let key in object) {
    console.log(object[key]);
 	}
 }
readObject(myCar);


