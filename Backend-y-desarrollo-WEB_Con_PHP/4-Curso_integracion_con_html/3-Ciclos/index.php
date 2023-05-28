<?php 
$usuarios=array("jose","ramiro","rata",);
$numero=readline("Escribe algo: ");

for ($i=0; $i <$numero ; $i++) { 
   echo "bien juagado";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    <ul>
        <!-- Cuclo for  -->
        <?php for ($i=0; $i < 10; $i++):?>
            <li><?php $i ?></li>
        <?php endfor;?>
        <!-- Ciclo while -->
        <?php while (false):?>
            <li>cualquier cosa</li>
        <?php endwhile; ?>
        <!-- Ciclo foreach -->
        <?php foreach ($usuarios as $username):?>
            <li><?php $username ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>




