<!--
--------------------------------------------------------
OMT © 2022
Thomas GOILLOT
-------------------------------------------------------- 
-->
<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0; // 0 = no error ; 1,2 = errors
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'OneMoreTrainingNoReply@gmail.com';
        $mail->Password   = 'projetannuel2022';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;

        //addr mail envoyeur
        $mail->setFrom('OneMoreTrainingNoReply@gmail.com', 'One More Training');

        //addr mail destinataire
        $mail->addAddress('thomadgllt@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "TEST";
        $mail->Body    = '<h1>TEST EN H1</h1>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message envoyé';
    } catch (Exception $e) {
        echo "Erreur lors de l'envoie du message, Error: {$mail->ErrorInfo}";
    }
?>