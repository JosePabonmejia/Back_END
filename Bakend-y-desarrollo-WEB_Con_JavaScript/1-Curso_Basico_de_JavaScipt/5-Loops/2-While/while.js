//Calculador utilizando el while\\
let operacion = prompt('+ - X %');

switch (operacion) {
    case '+':
        let a = parseInt(prompt('Numero'));
        let b = parseInt(prompt('Numero'));
        let suma = a+b;
        alert('la suma es '+suma);
        break;
    case '-':
        let a1 = parseInt(prompt('Numero'));
        let b1 = parseInt(prompt('Numero'));
        let suma1 = a1-b1;
        alert('la resta es '+suma1);
        break;
    case 'x':
        let a2 = parseInt(prompt('Numero'));
        let b2 = parseInt(prompt('Numero'));
        let suma2 = a2*b2;
        alert('la multi es  '+suma2);
        break;
    case '%':
        let a3 = parseInt(prompt('Numero'));
        let b3 = parseInt(prompt('Numero'));
        let suma3 = a3/b3;
        alert('la divi es '+suma3);
        break;

    default:
        alert('Debes colocar una opercion que si fucione');
        break;
}
