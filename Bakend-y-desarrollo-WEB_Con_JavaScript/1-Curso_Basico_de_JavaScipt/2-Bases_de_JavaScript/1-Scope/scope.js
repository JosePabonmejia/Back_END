SCOPE
El scope es cada uno de los entornos donde las variables tienen alcance dentro del código de JavaScript. 
En otras palabras, determina que valor tendrá la variable dependiendo dónde se encuentre.

Imagina que pierdes algo importante (llaves, dinero, celular), comienzas a buscar este objeto por los 
lugares más cercanos en que te encuentras; si no lo encuentras, buscas en los lugares más lejanos y 
así sucesivamente hasta encontrarlo. Las llaves son las variables y tú eres JavaScript.

Si haces referencia a una variable, el motor de JavaScript buscará su declaración en el entorno más cercano, 
y seguirá buscando en entornos más lejanos hasta llegar a la línea de código que la variable esté declarada, 
pero no en viceversa. A este proceso se lo denomina cadena de scope (scope chaining).
Tipos de scope
Existen dos tipos de scope: global y local. El scope local puede ser de función o de bloque. 
Un bloque es toda porción de código que está encerrada entre llaves {}, estos pueden ser los bloques: 
función, if, else, while, y for.

