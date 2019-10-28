<?php
/*
 * Process the form and send an email, then redirect to the thank you page.
 */
 
	require("../../phpmailer/class.phpmailer.php");
	
	$crm = $title."~".
	$firstname."~".
	$surname;
	
	/* start results email */
	
	$mail = new PHPMailer();
	$mail->From     = "earthi.ecomm@gmail.com";
	$mail->FromName = "Site";
	$mail->Subject = $crm;
 
	$mail->Mailer   = "smtp";
 
	$to = "admin@email.com";
	$toName = "Admin";
 
	$htmltextmessage="
	<font style='font-family:Arial;font-size:13px;'>
	The following enquiry has been made:
	<br /><br />
	Title: $title
	<br /><br />
	Firstname: $firstname
	<br /><br />
	Surname: $surname
	</font>
	";
 
	$plaintextmessage ="\n";
 
	$mail->Body = $htmltextmessage;
	$mail->AltBody = $plaintextmessage;
	$mail->AddAddress($to, $toName);
 
	if(!$mail->Send())
 	{
    		header("Location: fail.php");
 	}
	
	/* end results email */
	
	/* Start thank you email */
	
	$mail = new PHPMailer();
	$mail->From     = "earthi.ecomm@gmail.com";
	$mail->FromName = "Earthi";
	$mail->Subject = "Thank you";
 
	$mail->Mailer   = "smtp";
 
	$to = $email;
	$toName = $firstname ." ". $surname;
 
	$htmltextmessage="
	<font style='font-family:Arial;font-size:13px;'>
	$firstname $surname!<br />
	<br />This is a confirmation email!
	</font>
	";
	
	/* End thank you email */
	
	$plaintextmessage2 ="\n";
 
	$mail->Body = $htmltextmessage;
	$mail->AltBody = $plaintextmessage;
	$mail->AddAddress($to, $toName);
 
 	header("Location: frontend.php");
?>