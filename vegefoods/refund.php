<?php
$email = $_POST['email'];
$item = $_POST['item'];
$reason = $_POST['reason'];

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['refund'])){
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
    $mail->addAddress($email);

    $mail->isHTML(true);
	$mail->Subject = 'Refund Request';
    $mail->Body = 'You have successfully submitted a refund request. We will get back to you ASAP after reviewing your request. <p><b>Item</b>: '. $_POST['item'] . '<p><b>Reason</b>: ' . $_POST['reason'];

    if(!$mail->send()){
        echo("Something went wrong. Please try again.");
    } else{
        header("Location: member.php");
    }

}

?>