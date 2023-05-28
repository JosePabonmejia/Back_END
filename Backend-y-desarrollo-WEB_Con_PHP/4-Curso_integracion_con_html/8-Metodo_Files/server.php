<?php 

    $basename=$_FILES["file"]["name"];
    $image=$_FILES["file"]["tmp_name"];
    $rute="images/$basename";
    move_uploaded_file($image,$rute);
    echo $basename;

   echo "<pre>";
   var_dump($_FILES);
   echo "</pre>";

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
    <img src="<?=$rute ?>" alt="<?= $basename?>">
   </body>
   </html>

   