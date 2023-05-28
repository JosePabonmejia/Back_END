<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Sanitizando datos de mis usuarios</title>
</head>
<body>
    <div class="form-container">

        <h4 class="title">LOGIN</h4>
        <form action="./server.php" method="post" class="form">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="input">
            

            <label for="user">User name:</label>
            <input type="text" name="user" id="user" class="input">
            
            
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" class="input">
            

            <label for="age">Edad:</label>
            <input type="text" name="age" id="age" class="input">
            
            <button type="submit" class="primary-button">Enviar</button>
        </form>
    </div>
    </body>
</html>