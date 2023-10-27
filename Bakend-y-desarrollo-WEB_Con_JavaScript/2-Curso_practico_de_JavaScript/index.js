// console.log('estamos conectados');
// const h1 = document.querySelector('h1');
// const parrafo = document.querySelector('.parrafo');
// const parrafoo = document.querySelector('#parrafo');
// const input = document.querySelector('input');

// console.log(input.value);

// console.log({
//     h1,
//     parrafo,
//     parrafoo,
//     input
// });

// h1.innerHTML='cambiamos el titulo'; 

// console.log(h1.getAttribute= 'class');// consluta si existe una clase 
// h1.setAttribute= 'title'; // asigna el valor de atributo de titulo al h1 
// h1.setAttribute= 'titulo'; // le damos el valor de atributo de titulo al h1 
// h1.classList.add('titulo_gatito');
// h1.classList.remove('titulo_gatito');

// const numero1 = document.getElementById('Numero1');
// const numero2 = document.getElementById('Numero2');
// const resultado = document.getElementById('resultado');

// const botton_sumar = document.querySelector('#btnSuma');

// botton_sumar.addEventListener('click',sumar);

// function sumar() {
//     const resta = parseInt(numero1.value) + parseInt(numero2.value);
//     resultado.innerHTML = `Èl resultado es: ${resta}`;
// }


// function restar() {
//     const resta = parseInt(numero1.value) - parseInt(numero2.value);
//     resultado.innerHTML = `Èl resultado es: ${resta}`;
// }

const numero1 = document.getElementById('Numero1');
const numero2 = document.getElementById('Numero2');
const Formulario = document.querySelector("#formulario");

Formulario.addEventListener('submit',sumar);

function sumar(event) {
    const resta = parseInt(numero1.value) + parseInt(numero2.value);
    resultado.innerHTML = `Èl resultado es: ${resta}`;
    console.log(event);
    event.preventDefault();
}