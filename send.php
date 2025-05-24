<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mikylladaquing@gmail.com';
    $mail->Password = 'kseh rovy umvi agjf';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('mikylladaquing@gmail.com');
    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];

    $mail->SMTPDebug = 2; 
    $mail->Debugoutput = 'html'; 

    $mail->SMTPOptions = array(
        'ssl' => array(
            'CAfile' => 'C:/xampp/htdocs/mailer/cacert.pem',
            'verify_peer' => false,
            'verify_peer_name' => false,
        )
    );

    $mail->send();

    echo
    "
    <script>
    alert('Email sent successfully!');
    document.location.href = 'inddex.php';
    </script>

    ";
}

?>
