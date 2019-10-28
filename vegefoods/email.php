<?php

$result = "";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['submit'])){
    require 'vendor/autoload.php';
    $mail = new PHPMailer;
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'earthi.ecomm@gmail.com';
    $mail->Password = 'Earthi123';

    $mail->setFrom('earthi.ecomm@gmail.com');
    $mail->addAddress('earthi.ecomm@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['full_name']);

    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body = '<b>Name</b>: '. $_POST['full_name'] . '<p><b>Email</b>: ' . $_POST['email'] . '<p><b>Message</b>: ' . $_POST['message'];

    if(!$mail->send()){
        echo("Something went wrong. Please try again.");
    } else{
        header("Location: contact_success.html");
    }

}


?>