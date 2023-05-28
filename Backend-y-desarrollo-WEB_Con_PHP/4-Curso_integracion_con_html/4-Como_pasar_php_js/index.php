<?php 
$usuarios=array(
    array(
        "id" => 0,
        "username" => "mrJose",
        "color" => "red",
        "note" => 10,
    ),
    array(
        "id" => 1,
        "username" => "mrMichi",
        "color" => "green",
        "note" => 50,
    ),
    array(
        "id" => 0,
        "username" => "mrFirulays",
        "color" => "black",
        "note" => 100,
    )
    
);
$pepe=14;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php y java</title>
</head>
<body>
    <script>
        let users = JSON.parse('<?=json_encode($usuarios)?>');// Transforma el arreglo en un objeto json
        console.log(users);
        let pepe=<?=$pepe ?>
    </script>
</body>
</html>