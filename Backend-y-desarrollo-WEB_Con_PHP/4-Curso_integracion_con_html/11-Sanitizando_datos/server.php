<?php 
echo"<pre>";
    var_dump($_POST);
echo"</pre>";
$name=$_POST["nombre"];
$username=$_POST["user"];
$email=$_POST["email"];
$age=$_POST["age"];
//FUNCIONES PARA SANITIZAR DATOS 
$htmlname = htmlentities($name);//Convierte a texto todo intento de hakeo
$htmlusername = addslashes($username);//Agrega slashes (/)
//Exprecines regulares donde guardamos solamente palabras
$onlywords=preg_replace("/\d/","",$username);// le esta diciendo que quite todos los numeros para reemplazrlos por nada    
$onlynumbers=preg_replace("/\D/","",$username);// le esta diciendo que quite todas las letras para reemplazrlos por nada    
//VALIDAR CORREOS
$email = filter_var($email,FILTER_SANITIZE_EMAIL); //Verifica email
$age=filter_var($age,FILTER_SANITIZE_NUMBER_INT);//Numeros enteros
echo "\n";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Datos sanitizados</h4>
    <p>Name :<?=$htmlname ?> </p>
    <p>User que agrega slash :<?=$htmlusername ?> </p>
    <p>User name solo letras:<?=$onlywords ?> </p>
    <p>User name solo numeros:<?=$onlynumbers ?> </p>
    <p>Email :<?=$email ?> </p>
    <p>Age :<?=$age ?> </p>

</body>
</html>
