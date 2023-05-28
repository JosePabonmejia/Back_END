<?php
$bruno=rand(0,1);
$bruno1=rand(0,1);
$bruno2=rand(0,1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h2>Esto no se debe hacer por las malas practicas</h2>
    <?php 
        if ($bruno){

            echo "<p>Se hablo de bruno 😔</p>";
        }
        else {
            echo "<p>No se hablo de bruno 😁</p>";
            
        }
    ?>
    <h2>Esto es aceptable</h2>
    <?php if ($bruno1){?>
        <p>Se halbo de bruno 😔</p>
    <?php } else { ?>
        <p>No se hablo de bruno 😁</p>
        <?php } ?>

    <h2>Esto es lo correcto por buenas practicas</h2>   
    <?php  if ($bruno2): ?>
        <p>Se halbo de bruno 😔</p>
    <?php else: ?>
        <p>No se hablo de bruno 😁</p>
    <?php endif; ?>
</body>
</html>
