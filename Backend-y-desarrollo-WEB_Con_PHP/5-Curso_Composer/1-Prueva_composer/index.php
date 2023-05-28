<?php 

$valor_1=$_POST["numero-1"];
$valor_2=$_POST["numero-2"];

$suma=$valor_1+$valor_2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<div class="form-container">
    <h1>Calculadora</h1>
    <form action="./index.php" method="post">
    <label for="numero1">Ingresa valor</label>
    <input type="number" name="numero-1" id="numero1"><br>
    
    <label for="numero2">Ingresa valor</label>
    <input type="number" name="numero-2" id="numero2"><br>

    <button name="send">Calcular</button><br>
    
    <span><?=$suma; ?></span>

    </form>
</div> 

 
</body>
</html>