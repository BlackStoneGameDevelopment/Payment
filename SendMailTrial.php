<?php


require 'phpmailer/class.phpmailer.php';
require 'phpmailer/class.smtp.php';
  $mail = new PHPMailer();
  $mail->IsSMTP();        //Sets Mailer to send message using SMTP
  $mail->Host = 'smtpout.secureserver.net';  //Sets the SMTP hosts
  $mail->Port = '80';        //Sets the default SMTP server port
  $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
  $mail->Username = '3idevelopers2021@gmail.com';     //Sets SMTP username
  $mail->Password = 'rachsbd123';     //Sets SMTP password
  $mail->SMTPSecure = '';       //Sets connection prefix. Options are "", "ssl" or "tls"
  $mail->From = '3idevelopers2021@gmail.com';     //Sets the From email address for the message
  $mail->FromName = 'Bhavin';    //Sets the From name of the message
  $mail->AddAddress('bhavin.divecha09@gmail.com', 'Name');//Adds a "To" address
  $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
  $mail->IsHTML(true);       //Sets message type to HTML    
  $mail->Subject = 'Hello';    //Set s the Subject of the message
  $mail->Body = 'Trial Message';    //An HTML or plain text message body
  if($mail->Send())        //Send an Email. Return true on success or false on error
  {
   $error = '<label class="text-success">Thank you for contacting us</label>';
  }
  else
  {
   $error = '<label class="text-danger">There is an Error</label>';
  }
?>