<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/PHPMailer/src/Exception.php';
require 'vendor/phpmailer/PHPMailer/src/PHPMailer.php';
require 'vendor/phpmailer/PHPMailer/src/SMTP.php';

enviarEmail();

function enviarEmail(){
	if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['asunto']) && isset($_POST['mensaje'])){
		//enviar email
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$asunto = $_POST['asunto'];
		$mensaje = $_POST['mensaje'];

		$mail = new PHPMailer(true);
		try {
		    //Server settings
		    //$mail->SMTPDebug = 2;                
		    $mail->isSMTP(); 
		    $mail->SMTPOptions = array(
				'ssl' => array(
			    'verify_peer' => false,
			    'verify_peer_name' => false,
			    'allow_self_signed' => true
			));                                          
		    $mail->Host       = 'smtp.gmail.com';                     
		    $mail->SMTPAuth   = true;                                  
		    $mail->Username   = 'ornellasablic@gmail.com';                     
		    $mail->Password   = '14111992';                               
		    $mail->SMTPSecure = 'tls';        
		    $mail->Port       = 587;                                 

		    //Recipients
		    $mail->setFrom($_POST['email'],$_POST['nombre']);
		    $mail->addAddress('ornellasablic@gmail.com');    
		    $mail->addReplyTo($_POST['email'], $_POST['nombre']);
		    
		    //Content
		    $mail->isHTML(true);                                  //Set email format to HTML
		    $mail->Subject = 'Enviado por ' .$_POST['nombre'];
		    $mail->Body = 'Nombre: ' . $nombre . '<br>Correo: ' . $email . '<br>Asunto: ' . $asunto . '<br>Mensaje: ' . $mensaje;

		    $envio = $mail->send();
		    echo '<h5> El mensaje ha sido enviado</h5>';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}
}

