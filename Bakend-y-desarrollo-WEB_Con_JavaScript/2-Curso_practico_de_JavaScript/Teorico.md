# MANIPULACION DEL DOM
## Como conectar JavaScript con HTML 
Primeramente tenemos el archivo html donde nos interesa la parte del body
* Estamos en el index.html

        <body>
            <h1>Introduce tu nombre porfavor</h1>
            <script>
            let nombre = prompt("introduce tu nombre");
            alert(nombre);
            </script>
        </body>
        </html

* La mejor manera de trabajar con un scrip es crear un archivo java y luego enlasarlo al la etiqueta script 

        <script src="./index.js"></script>

* archivo index.js 

        let nombre = prompt("introduce tu nombre");
        alert(nombre);

## Como leer HTML desde Java Scrit

Existen muchas maneras de leer etiquetas de HTML desde un archivo JS, pero la forma profecional de trabajar es crear variables que reprecenten a los selectores de cada uno las etiquetas HTML.


* Tenemos los siguientes elementos en HTML 

        <body>
            <h1>Introduce tu nombre porfavor</h1> // TITULO
            <p>Esto es un parrafo</p> // PARRAFO
            <p class="parrafo">Esto es un p pero con clase</p> //CLASE
            <p id="parrafo">Esto es un p pero con clase</p> // ID
            <input placeholder="introduce algo" type="text"> // INPUT 
        </body>

* Los selecctores de JS siguen las mismas reglas de CSS 

        const h1 = document.querySelector('h1'); // con etiqueta normal  
        const parrafo = document.querySelector('.parrafo'); // punto para la clase
        const parrafoo = document.querySelector('#parrafo'); // # pra id 
        const input = document.querySelector('input'); // etiqueta

* Para mos trarnos todos los elementos seleccionados 

        console.log({
            h1,
            parrafo,
            parrafoo,
            input
        });

* Para los valores del input 

        console.log(input.value);

### Como cambiar o modificar los elementos de HTML 

Una vez establecida la coneccion con HTML mediante la creacion de constantes y el metodo **querySelector** podemos hacer uso de otro metodo **.innerHTML**

* Ojo podemos utilizar ***inner*** para sanitizar y validar datos 
         
          h1.innerHTML='cambiamos <br> el titulo'; 
          h1.innerText='cambiamos <br> el titulo'; // Transforma todo a texto 

* Tambien podemos consultar y cambiar el tipo de clase o atributo que tiene las etiquetas HTML

            console.log(h1.getAttribute= 'class');// consluta si existe una clase 
            h1.setAttribute= ('class','title'); // asigna el valor de clase title al h1 
            h1.classList.add('titulo_gatito'); // podemos agregar una clase extra 
            h1.classList.remove('titulo_gatito');// removemos la clase extra 
            
            h1.classList.toogle('titulo_gatito');// detecta que clase tiene la clase o no se la puede quitar o agregar 

            h1.classList.contains('titulo_gatito');// removemos la clase extra 

## Eventos en JS interactuando con usuarios

Los eventos se los coloca en las mismas etiquetas HTML, por ejemplo tenemos el mas usado que es el ***onClick*** para los botones 

* Tenemos la siguiente arquitectura HTML para simular las funciones de una calculadora

        <body>
        <h1 class="title">Calculadora XD</h1>
        <input type="text" placeholder="Introduce un valor:" id="Numero1">
        <input type="text" placeholder="Introduce un valor:" id="Numero2">
        // todo en una linea de codigo pero es mala practica OJO 
        <button id="btnSuma" onclick="alert(parseInt(Numero1.value)+parseInt (Numero2.value))">SUMAR</button>
        
        // Llamando una funcion 
        <button id="btnResta" onclick="restar()">RESTAR</button>
        <span id="resultado">El resultado es:</span>
        
        <script src="./index.js"></script>
        </body>

* llamando a la funcion sumar() para ello debemos definir las constantes que llamamos desde HTML

        const numero1 = document.getElementById('Numero1');
        const numero2 = document.getElementById('Numero2');
        const resultado = document.getElementById('resultado')
        function restar() {
        const resta = parseInt(numero1.value) - parseInt(numero2.value);
        resultado.innerHTML = `Èl resultado es: ${resta}`;
        }

### addEventListener
Nos permite leer eventos de una manera mas rapida

* El addEvent necesita que especifiquemos el metodo en este caso click y la funcion pero sin invocarla 

        const botton_sumar = document.querySelector('#btnSuma');// llamamos al boton con querrySelector una manera de llamar ids como en css 

        botton_sumar.addEventListener('click',sumar); // hacemos uso de add 

        function sumar() {
        const resta = parseInt(numero1.value) + parseInt(numero2.value);
        resultado.innerHTML = `Èl resultado es: ${resta}`;
        }

#### Frormularios

* Estructura HTML 

        <body>
        <form id="formulario">
                <h1 class="title">Calculadora XD</h1>
                <input type="text" placeholder="Introduce un valor:" id="Numero1">
                <input type="text" placeholder="Introduce un valor:" id="Numero2">

                <button id="btnSuma" >Calcular</button>

                <span id="resultado">El resultado es:</span>
        </form>
        
        <script src="./index.js"></script>
        </body>

* JS 

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



* Manera de imprimir un evento tipo formulario ya que los formularios por defecto determinan que el ultimo boton sera de typo submit y la pagina se recargara siempre 

                console.log(event);
                event.preventDefault();

