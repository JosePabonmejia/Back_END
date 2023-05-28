<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST METOD</title>
</head>
<body>
    <form action="./server.php" method="post" enctype="multipart/form-data">
        <label for="name">Nombre:<input type="text" name="name" id="name" require="name"></label><br>
        
        <label for="file">Edad:<input type="file" name="file" id="file" require="file"></label><br>
        
        <label for="edad">Edad:<input type="text" name="edad" id="edad" require="edad"></label><br>
        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>