<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(TRUE);


$mail1 = $_POST['email'];
$subject1 = "HelpDesk: Contact";
$body1 = $_POST['msg'];
$n = (explode("@",$_POST['email']));
$name1 = $n[0];

try {
   
   $mail->setFrom('', 'HelpDesk');
   $mail->addAddress($mail1, $name1);
   $mail->AddCC('','HelpDesk');
   $mail->Subject = $subject1;
   $mail->Body = $body1;
   //$mail->addStringAttachment(file_get_contents($pdf_url), 'file.pdf');
   //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
   
   /* SMTP parameters. */
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = TRUE;
   $mail->SMTPSecure = 'tls';
   $mail->Username = '';
   $mail->Password = '';
   $mail->Port = 587;
   
   /* Disable some SSL checks. */
   $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
   );
   
   /* Finally send the mail. */
  if (!$mail->send()){
   	/* PHPMailer error. */
   	echo $mail->ErrorInfo;
  }
  else{
  	echo "<script> alert('mail sent'); window.location.href='index.html';</script>";
  	
  }

}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}
