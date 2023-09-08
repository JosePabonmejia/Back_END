# SQL
# DDL DATA DEFINITION LANGUAJE EN SQL
## COMO CREAR DATA BASE TABLAS?

        CREATE : CREAR NUEVAS TABLAS 
        ALTER : ADTERAR DATOS 
        DROP : ELIMINAR
        TRUNCATE : ELIMINAR TODOS LOS REGISTROS 
        COMMENT : AGREGAR COMENTARIOS 
        RENAME : RENOMBAR OBJETOS 

* Crear base de datos
        
        CREATE DATABASE nombre_database;

* Crear tablas: estas deben estar con atributos requeridos

        CREATE TABLE database.personas(
            persona_id INTEGER FOREIGN KEY AUTOCOMPLETE NOT NULL,
            nombre VARCHAR(255) NULL,
            apellido VARCHAR(255) NULL,
            edad INTEGER
        );

* Insetar datos en las tablas 
        
        INSERT INTO database.personas(nombre,apellido,edad)
        VALUES ("JOSE","PABON","28"),
               ("MICAELA","PABON","26");

* Crear una vista es como crear una consulta 
        
        CREATE VIEW ver_persona AS 
        SELECT nombre,apellido,edad
        FROM personas
        WHERE edad "18";

 * Alterar tablas agregando nuevos campos

        ALTER TABLE persona 
        ADD COLUMN localidad tipo de dato integer varchar etc;
        DROP COLUMN 


* MY DATABASE PROYECT 
       
        CREATE DATABASE blog_post;

        CREATE TABLE categoria(
        id_categoria INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
        nombre_categoria VARCHAR(30) NOT NULL
        );

        CREATE TABLE etiqueta(
        id_etiqueta INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
        nombre_etiqueta VARCHAR(30) NOT NULL
        );  

        CREATE TABLE usuarios(
        id_usuario INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
        login VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        nickname VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL
        );
        
        CREATE TABLE post(
        id_post INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
        titulo VARCHAR(155),
        fecha_de_publicacion TIMESTAMP,
        contenido TEXT NOT NULL,
        estatus CHAR(8) DEFAULT "Activo",
        FOREIGN KEY(id_categoria) REFERENCES categoria(id_categoria) ON UPDATE CASCADE ON DELETE NO ACTION,
        FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE CASCADE ON DELETE NO ACTION
        );