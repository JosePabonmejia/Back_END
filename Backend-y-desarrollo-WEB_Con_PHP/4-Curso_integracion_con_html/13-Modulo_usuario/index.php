<?php 

require("mail.php");
    //funcion para validar los datos EMPTY sirve para verificar si la variable esta vacia 
    function validate($name,$email,$subject,$message){
       //Retornamos los datos para la variable  
       return!empty($name) && !empty($email) && !empty($subject) && !empty($message);  
    }
    $status="";
    
    //preguntamos si el boton se envio con ISSET

    if (isset($_POST["form"])){
        //Este array unpaket sirve para que todos los valores del formulario se impriman en las varialbes del backEND (...$_POST)
        if(validate($_POST["nombre"],$_POST["email"],$_POST["subject"],$_POST["message"])){
          $name=$_POST["nombre"];
          $email=$_POST["email"];
          $subject=$_POST["subject"];
          $message=$_POST["message"];
          
          $body="$name <$email> te envia el siguiente mensaje: <br><br>$message";
          //Manda correo
          sendMail($subject,$body,$email,$name,true);

          $status="Success";
        }
        else {
          $status="Danger";      
        }
    }
?>
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
    <?php if ($status == "Danger"):?>
        <div class="alert">
            <span>Surgio un error</span>
        </div>
        <?php endif; ?>
    <?php if ($status == "Success"):?>
    <div class="success">
        <span>Enviado con exito</span>
    </div>
    <?php endif;?>

    <div class="form-container">

        <h4 class="title">Contact us</h4>
        <form action="./" method="post" class="form">

            <label for="nombre">Name :</label>
            <input type="text" name="nombre" id="nombre" class="input">
            
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" class="input">
            
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" class="input">
            <label for="">Message:</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Comment:"></textarea>

            <button type="submit" class="primary-button" name="form">Send</button>
        </form>
        
        <div class="info">
            <span><i class="fa-regular fa-map-location-dot"></i> 13 Saw mill circle, Nort olmested</span>
            <span><i class="fa-regular fa-phone"></i>+542-12371723</span>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/7be7dc216d.js" crossorigin="anonymous"></script>
    </body>
</html>

