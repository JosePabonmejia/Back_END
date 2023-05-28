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
        <!-- INPUT SIMPLE -->
        <h3>INPUT SIMPLE</h3>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" require="name"><br><hr>
        <!-- INPUT DE TIPO FILE -->
        <h3>INPUT DE TIPO FILE</h3>
        <label for="file">Archivo:</label>
        <input type="file" name="file" id="file" require="file"><br><hr>
        <!-- INPUT DE TIPO ARREGLO -->
        <h3>INPUT TIPO ARREGLO</h3>
        <label>Personas:</label><br>
        <input type="text" name="personas[]"><br>
        <input type="text" name="personas[]"><br>
        <input type="text" name="personas[]"><br>
        <button type="submit">Mandar fomrm</button><hr>
        <!-- INPUT DE TIPO ARREGLO ASOCIATIVO-->
        <h3>INPUT TIPO ARREGLO ASOCIATIVO</h3>
        <label>Personas:</label><br>
        <input type="text" name="persona[nombre]"><br>
        <label>Email:</label><br>
        <input type="email" name="persona[email]"><br>
        <label>Edad:</label><br>
        <input type="number" name="persona[edad]"><br>
        <button type="submit">Mandar fomrm</button><hr>
        <!-- INPUT TIPO CHECK BOX -->
        <label for="list">Hamburguesa</label>
        <input type="checkbox" name="list" id="list" value="Se selecciono hamburguesa"><br>
        <label for="list">Pizza</label>
        <input type="checkbox" name="list" id="list" value="Se selecciono Pizza"><br>
        <label for="list">Papa</label>
        <input type="checkbox" name="list" id="list" value="Se selecciono Papa"><br>
        <label for="list">Cereal</label>
        <input type="checkbox" name="list" id="list" value="Se selecciono Cereal"><br>
        <button type="submit">Enviar</button><hr>
        <!-- INPUT TIPO RADIO BUTTON -->
        <label for="radio">Hamburguesa</label>
        <input type="radio" name="radio" id="radio" value="Se selecciono hamburguesa"><br>
        <label for="radio">Pizza</label>
        <input type="radio" name="radio" id="radio" value="Se selecciono Pizza"><br>
        <label for="radio">Papa</label>
        <input type="radio" name="radio" id="radio" value="Se selecciono Papa"><br>
        <label for="radio">Cereal</label>
        <input type="radio" name="radio" id="radio" value="Se selecciono Cereal"><br>
        <button type="submit">Enviar</button><hr>
        <!-- INPUT TIPO LIST BOX -->
        <select name="select" id="">
            <option value="Se selecciono pizza" name="select">pizza</option>
            <option value="Se selecciono hambuerguesa" name="select">hambuerguesa</option>
            <option value="Se selecciono cafe" name="select">cafe</option>
            <option value="Se selecciono soda" name="select">soda</option><hr>
        </select>
        <button type="submit">Enviar</button><hr>
        <!-- INPUT DE MULTIPLES ARCHIVOS -->
        <label for="galeria">Carga tus imagenes</label>
        <input type="file" multiple name="galeria[]" id="galeria"><br>
        <button type="submit">Enviar</button><hr>

    </form>
</body>
</html>