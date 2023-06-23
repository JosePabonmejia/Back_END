// Una clase se puede entender como si se tratara de un molde el cual tiene propiedades y características generales.
// A partir de ese clase se pueden crear varias instancias u objetos los cuales se comportarán de manera independiente.
// Un ejemplo práctico puede ser el siguiente:
// Tenemos un molde para crear galletas en forma de estrella. Esta vendría siendo la clase Estrella la cual tiene características definidas como el numero de picos y el tamaño.
// A partir de ese molde podemos crear varias galletas en forma de estrella. Cada galleta vendría siendo un objeto de la clase Estrella.
// En código se podría ver como lo siguiente:
<?php

class Estrella {
	public $picos;
	public $tamanio;
	public function cocinar()
	{
		return "Soy una estrella $tamanio que tiene $picos picos";
	}
}

$estrella1 = new Estrella;
$estrella1->picos = 3;
$estrella1->tamanio = "chica"

$estrella2 = new Estrella;
$estrella2->picos = 5;
$estrella2->tamanio = "grande"

echo $estrella1->cocinar(); //Soy una estrella chica que tiene 3 picos;
echo $estrella2->cocinar(); //Soy una estrella grande que tiene 5 picos;

?>
//Deuda tecnica
//La deuda técnica es el coste y los intereses a pagar por hacer mal las cosas. El sobre esfuerzo a pagar para mantener un producto software mal hecho, y lo que conlleva, como el coste de la mala imagen frente a los clientes, etc

//Code smell 
Hace referencia al mal olor del código. Este concepto no se refiere a errores técnicos, sino a errores de orden y diseño. Esto sucede mucho cuando intentamos crear soluciones a partir de otras soluciones.

La solución a estos casos es crear una abstracción.

Cómo evitarlo
Para esto debemos hacer una programación más limpia, y reusable. Tenemos que evitar crear grandes métodos, o sea, programación estructura dentro de clases. También evitar crear grandes clases o superclases.

Y sin duda, nosotros debemos evitar a toda costa copiar y pegar código.

//Código espagueti
Un código espagueti es código que está estructurado mediante if, while, for netamente, todo en un mismo archivo donde solamente buscamos resolver el problema. Cuando creamos código estructurado corremos peligro de crear código espagueti. La OOP nos ayuda evitarlo.
Cómo evitar el código espagueti
Resolver el problema
Crea de forma lógica y coherente diferentes métodos que reemplacen tus estructuras de control.
Crea una o varias clases dependiendo el caso.
<?php

class Excel {

    public function generar($generar_para) {
        // TODO El codigo para generar el archivo
    }
    
}

$excel = new Excel();

if($generar_archivo_para_clientes) {
    $excel->generar("clientes");
}
else {
    $excel->generar("proveedores");
}

?>

//Inclusion de archivos 
**Include **=> nos permite incluir un archivo dentro de otro. Sino lo encuentra solo genera un warning que permite continuar.
**Require **=> lo mismo que include pero más exigente, en caso de fallo producirá un error fatal, no permitirá continuar con el proceso.
Require_once => idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye.

<?php

include 'greet.php'; //El inclide no detiene el sistema, solo lo muestra en pantalla
require 'greet.php'; //El require detiene el sistema, si no encuentra el archivo, sale del sistema
require_once 'greet.php'; //El require_once solo incluye el archivo una vez
echo greet('World','Hello');



?>