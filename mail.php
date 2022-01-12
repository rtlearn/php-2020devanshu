<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;


    require './vendor/autoload.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'hostname';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'rtcamp_email_of_domain';
    $mail->Password = 'password';
    $mail->setFrom('rtcamp_email_of_domain', 'Admin');
    $mail->addReplyTo('rtcamp_email_of_domain', 'Admin');