<?php

include './1usuarios.php';
include './2administrador.php';
include './3prersona.php';

$user = new Usuarios;
$user = $type = new Administrador;
echo $user->$type->saludar();    
