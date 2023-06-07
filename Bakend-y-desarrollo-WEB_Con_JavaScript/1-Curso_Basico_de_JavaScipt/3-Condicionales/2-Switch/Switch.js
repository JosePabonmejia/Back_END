let valor = prompt ('Sumar + Restar - Multi x Divi %');
let a =parseInt(prompt('numero:' ));
let b =parseInt(prompt('numero:' ));
switch (valor) {
    case '+':
        suma = a+b;
        alert('La suma es'+suma);
        break;
    case '-':
        suma = a-b;
        alert('La suma es'+suma);
        break;
    case 'x':
        suma = a*b;
        alert('La suma es'+suma);
        break;
    case '%':
        suma = a/b;
        alert('La suma es'+suma);
        break;

    default:
        alert('Parametro no permitido');
        break;
}




