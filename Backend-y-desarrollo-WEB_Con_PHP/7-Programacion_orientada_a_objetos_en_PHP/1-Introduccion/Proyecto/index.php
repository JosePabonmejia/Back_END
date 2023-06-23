<?php

include './3prersona.php';
include './1usuarios.php';
include './2administrador.php';

$user = new Usuarios;
$user->type = new Administrador;
echo $user->type->saludar();    
