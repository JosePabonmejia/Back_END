const h1 = document.querySelector('h1');
const valor1 = document.querySelector('#calculo1');
const valor2 = document.querySelector('#calculo2');
const btn1 = document.querySelector('#btncalcular1');
const btn2 = document.querySelector('#btncalcular2');
const resultado = document.querySelector('#resultado');
//evento click 
//Utilizamos addEventListener
//btn.addEventListener('nombre del evento', 'codigo en JS')
btn2.addEventListener('click',btnOnClick);

function btnOnClick (){
    console.log('Se esta haciendo click en el boton');
    const suma = (parseInt(valor1.value) + parseInt(valor2.value));
    resultado.innerHTML=suma;
    
    //para mandar los datos al html podemos mandar por (innerText appendChild etc)
}
