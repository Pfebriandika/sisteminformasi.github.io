<?php
	$mail = new PHPMailer(true);
    $mail->IsSMTP(); // we are going to use SMTP
    $mail->SMTPAuth = true; // Authentication must be disabled
    $mail->SMTPSecure = 'tls';  // prefix for secure protocol to connect to the server
    $mail->Host = 'smtp.office365.com';     // setting GMail as our SMTP server
    /*$mail->Username = 'no-reply@pgn.co.id';     // setting GMail as our SMTP server
    $mail->Password = 'corp.PGN';     // setting GMail as our SMTP server*/
    $mail->Username = 'hcm.support@pgn.co.id';     // setting GMail as our SMTP server
    $mail->Password = 'P@55w0rd';     // setting GMail as our SMTP server
    $mail->Port = 587;                // SMTP port to connect to GMail
    $mail->SetFrom($mail->Username);  //Who is sending 
    $mail->isHTML(true);
?>