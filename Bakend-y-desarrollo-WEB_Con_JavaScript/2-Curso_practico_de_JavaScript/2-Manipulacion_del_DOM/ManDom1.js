// Como conectar JS con HTML
// Podemos traer informacion desde html mediante elemento como ser h1 o como id o clase 
// el mejor metodo para darle un valor a las etiqueras html es utilizando querySelector 
// luego el selecctor que se utilizo en la etiqueta, esta parte es muy parecida a los selectores en CSS
// como podemos observar
// h1 para la etiqueta 
// con . para la clase 
// con # para id 
const h1 = document.querySelector('h1');
const  p= document.querySelector('p');
const parrafo = document.querySelector('.parrafo');
const parrafo2 = document.querySelector('#parr');
const parr = document.getElementById('parr');
const input = document.querySelector('input');

//Leyendo HTML desde JS 
console.log(
    {
        h1,p,parrafo,parrafo2,parr,input
    }
);
console.log(input.value);//querySelectorall osea muestra todos los datos que estamos recibiendo 

//Escribiendo HTML desde js 

h1.innerHTML = 'Hola perrin';
console.log(h1.getAttribute('pantalla')); //lee el atributo que seleccionamos 
h1.setAttribute('pantalla','LG'); //Asigna un nuevo atributo 
console.log(h1.getAttribute('pantalla'));
h1.classList.add('pantalla','Samsumg'); //Agrega una clase al titulo h1
//h1.classList.remove('Samsumg');//Quita clase
console.log(h1.getAttribute('pantalla'));
h1.classList.toggle('pantalla','Samsumg');// Eventos si ya tiene la clase o no sela quitemos o se la coloquemos 
h1.classList.contains('pantalla','Samsumg');// Nos debuelve true o false si nuestro elemento tiene la clase que le estamos dando

input.value = '123'; // Le da valor al input, tambien podemos modificar su atributos placeholder etc.

//Como creamos un elemento desde 0 ?
document.createElement('ing'); //Creamos una imagen 

//IMPORTANTE Vamos a crear una imagen dentro de mi parrafo parr en html
const img =document.createElement('img');//creamos un elemento img para que se muesre en el HTML 
img.setAttribute('src','https://upload.wikimedia.org/wikipedia/commons/4/48/Basketball.jpeg');//le damos un valor a la imagen o le ponemos los atributos
parr.append(img);//Lo mandamos al html

//Eventos en JS
//



var nombre = 'jose';
var apellido = 'pabon';
var dinero_a = 200;
var deudas = 100;
var dinero = dinero_a - deudas ;
console.log(`Mi nombre es ${nombre} mi apellido ${apellido} y mi liquido pagable es ${dinero}`); 

function nombreCompleto (nombre,apellido) {
    console.log(`Mi nombre es ${nombre} y mi apellido es ${apellido}`);
}
nombreCompleto('jose','pabon');