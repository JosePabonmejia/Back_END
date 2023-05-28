<?php
$n=array();
for ($i=0; $i <= 10 ; $i++) { 
    $resultado=$i*$i;
    $texto="$i x $i = $resultado";
    array_push($n,$texto);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla del 9</title>
</head>
<body>
    <?php foreach ($n as $tabla_del_9 => $texto):?>
        <ul><?=$texto ?></ul>
       <?php endforeach; ?> 
</body>
</html>
