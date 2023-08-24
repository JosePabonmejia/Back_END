# Curso de fundamentos de bases de datos 
## Tipos de bases de datos
* ***Relacionales:*** En la industria hay varias compañías dedicadas a ser manejadoras de bases de datos relacionales como SQL Server, Oracle, MariaDB, entre otras.
* ***No relacionales:*** Todavía están avanzando y existen ejemplos muy distintos como cassandra, elasticsearch, neo4j, MongoDB, entre otras.

* Servicios:

* ***Auto administrados:*** Es la base de datos que instalas tú y te encargas de actualizaciones, mantenimiento, etc.
* ***Administrados:*** Servicios que ofrecen las nubes modernas como Azure y no debes preocuparte por mantenimiento o actualizaciones.

## En esta primera prueba de bases de datos vas a usar SQL, el lenguaje para hacer consultas en bases de datos relacionales.

En el editor de código encuentras un primer ejemplo de la sentencia SELECT para imprimir datos en la consola.

Tu desafío es replicar esa sentencia para imprimir los siguientes valores:

* 2 + 2 (la sentencia de prueba que ya encuentras en el editor)
* 18/3

* "Esto es una sentencia SELECT" (no olvides las comillas ")
Escribe las 3 sentencias, imprime el resultado en la consola y corre las pruebas para comprobar que completaste el desafío.

* ***💡 Recuerda que esta es la primera prueba. En las próximas clases aprenderás a profundidad cómo funciona SELECT, más sentencias SQL y otros tipos de bases de datos.***

        RESUELTO 
        SELECT (2+2);
        SELECT (18/3);
        SELECT ("Esto es una sentencia SELECT");

## Bases de datos relacionales (RBD)

Es importante que sea fácil de guardar y extraer, anteriormente se usaban bases de datos basadas en archivos, el cuál era texto plano fácil de guardar, pero difícil de extraer, por esto se inventaron las bases de datos relacionales.<br>
En 1990 Codd se preocupó porque los sistemas de gestión de bases de datos (SGBD) que decían ser relacionales, no lo eran.<br> En la práctica es difícil cumplir las 12 pero, un SGBD es más relacional cuantas más reglas cumpla

### Las Reglas y mandamientos de Edgar Frank Ted Codd

* ***Regla 0: Regla de fundación.*** 
    * a) Cualquier sistema que se proclame como relacional, debe ser capaz de gestionar sus bases de datos enteramente mediante sus capacidades relacionales.

* ***Regla 1:*** Regla de la información.
    * a) Todos los datos deben estar almacenados en las tablas
    * b) Esas tablas deben cumplir las premisas del modelo relacional
    * c) No puede haber información a la que accedemos por otra vía

* ***Regla 2:*** Regla del acceso garantizado.
    * a) Cualquier dato es accesible sabiendo la clave de su fila y el nombre de su columna o atributo
    * b) Si a un dato no podemos acceder de esta forma, no estamos usando un modelo relacional

* ***Regla 3:*** Regla del tratamiento sistemático de valores nulos.
    * a) Esos valores pueden dar significado a la columna que los contiene
    * b) El SGBD debe tener la capacidad de manejar valores nulos
    * c) El SGBD reconocerá este valor diferenciándolo de cualquier otro
    * d) El SGBD deberá aplicársele la lógica apropiada
    * e) Es un valor independiente del tipo de datos de la columna

* ***Regla 4:*** Catálogo dinámico en línea basado en el modelo relacional.
    * a) El catálogo en línea es el diccionario de datos
    * b) El diccionario de datos se debe de poder consultar usando las mismas técnicas que para los datos
    * c) Los metadatos, por tanto, se organizan también en tablas relacionales
    * d) Si SELECT es una instrucción que consulta datos, también será la que consulta los metadatos

* ***Regla 5:*** Regla comprensiva del sublenguaje de los datos completo.
    * a) Al menos tiene que existir un lenguaje capaz de hacer todas las funciones del SGBD
    * b) No puede haber funciones fuera de ese lenguaje
    * c) Puede haber otros lenguajes en el SGBD para hacer ciertas tareas
    * d) Pero esas tareas también se deben poder hacer con el “lenguaje completo”

* ***Regla 6:*** Regla de actualización de vistas.
    * a) Las vistas tienen que mostrar información actualizada
    * b) No puede haber diferencias entre los datos de las vistas y los datos de las tablas base

* ***Regla 7:*** Alto nivel de inserción, actualización, y cancelación.
    * a) La idea es que el lenguaje que maneja la base de datos sea muy humano
    * b) Eso implica que las operaciones del lenguaje de manipulación de los datos (DML) trabajen con conjuntos de filas a la vez
    * c) Para modificar, eliminar o añadir datos, no hará falta programar de la forma en la que lo hacen los lenguajes de tercera generación como C o Java

* ***Regla 8:*** Independencia física de los datos.
    * a) Cambios en la física de la BD no afecta a las aplicaciones ni a los esquemas lógicos
    * b) El acceso a las tablas (elemento lógico) no cambia porque la física de la base de datos cambie

* ***Regla 9:*** Independencias lógicas de los datos.
    * a) Cambios en el esquema lógico (tablas) de la BD no afectan al resto de esquemas
    * b) Si cambiamos nombres de tabla, o de columna o modificamos información de las filas, las aplicaciones (esquema externo) no se ven afectadas
    * c) Es más difícil de conseguir

* ***Regla 10:*** Independencia de la integridad.
        * a) Las reglas de integridad (restricciones) deben de ser gestionadas y almacenadas por el SGBD

* ***Regla 11:*** Independencia de la distribución.
        * a) Que la base de datos se almacene o gestione de forma distribuida en varios servidores, no afecta al uso de esta ni a la programación de las aplicaciones de usuario
        * b) El esquema lógico es el mismo independientemente de si la BD es distribuida o no

* ***Regla 12:*** La regla de la no subversión.
    * a) La base de datos no permitirá que exista un lenguaje o forma de acceso, que permita saltarse las reglas anteriores
## Qué son entidades y atributos

En bases de datos, una entidad es la representación de un objeto o concepto del mundo real que se describe en una base de datos. Las entidades se describen en la estructura de la base de datos empleando un modelo de datos.

### ¿Qué es una entidad?
Una entidad es algo similar a un objeto (programación orientada a objetos) y representa algo en el mundo real, incluso algo abstracto. Tienen atributos que son las cosas que los hacen ser una entidad y por convención se ponen en plural.

### Ejemplo de entidad en bases de datos
En la imagen puedes observar como ejemplo que la enidad Laptops posee diferentes atributos como colo, pantalla, año, modelo, etc.
<img src="./asetts/ejemplo de entidad-c0b48b06-ba54-4026-add0-e7e522d6f47e.webp" alt="">

### ¿Qué es un atributo?
Son las características o propiedades que describen a la entidad (se encierra en un óvalo). Los atributos se componen de:<br>

Los atributos compuestos son aquellos que tienen atributos ellos mismos.<br>

### Los atributos llave son aquellos que identifican a la entidad y no pueden ser repetidos. Existen:

* ***Naturales:*** son inherentes al objeto como el número de serie

* ***Clave artificial:*** no es inherente al objeto y se asigna de manera arbitraria.
Tipos de entidades
* ***Entidades fuertes:*** son entidades que pueden sobrevivir por sí solas.

* ***Entidades débiles:*** no pueden existir sin una entidad fuerte y se representan con un cuadrado con doble línea.

* ***Identidades débiles por identidad:*** no se diferencian entre sí más que por la clave de su identidad fuerte.
* ***Identidades débiles por existencia:*** se les asigna una clave propia.

### Cómo representar las entidades en bases de datos?
Existen varios tipos de notaciones para los modelos entidad relacionamiento. Chen es uno de los más utilizados para diagramar lógicamente la base de datos. Aquí te mostramos un ejemplo.

<img src="./asetts/ejemplo-notacion-chen-entidades-98a3fc2d-c6c0-4012-9e0e-c51edc2acc40.webp" alt="">
