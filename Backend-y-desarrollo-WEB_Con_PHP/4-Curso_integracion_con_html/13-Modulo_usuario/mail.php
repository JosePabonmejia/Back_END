<?php 
    
    require("vendor/autoload.php");
    use PHPMailer\PHPMailer\PHPMailer;
  
    
    function sendMail($subject,$body,$email,$name,$html=false){
        //copiado del servisor mailtrap
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '2a787d0a464d74';
    $phpmailer->Password = 'f3f25d78784770';
    //Añadiendo destinatarios 
    $phpmailer->setFrom('contact@miempresa.com','Mi empresa');
    $phpmailer->addAddress($email,$name);

    //Definiendo el contenido de mi email
    $phpmailer->isHTML(true);                                  
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    //Mandar el correo
    $phpmailer->send();
}
?>