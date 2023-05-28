<?php 
//Filtra tipo de datos 
    $is_float = filter_var("esto no es un float(decimal)",FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
    $is_integer = filter_var("esto no es un numero",FILTER_VALIDATE_INT);
    $is_ip = filter_var("127.0.0.1", FILTER_VALIDATE_IP);
    $is_url = filter_var("google.com", FILTER_VALIDATE_URL);
    $is_email = filter_var("jose@gmail.com",FILTER_VALIDATE_EMAIL);
    var_dump($is_float);
    var_dump($is_integer);
    var_dump($is_ip);
    var_dump($is_url);
?>