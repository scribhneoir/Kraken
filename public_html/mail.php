<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'libs/phpMailer/src/Exception.php';

/* The main PHPMailer class. */
require 'libs/phpMailer/src/PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'libs/phpMailer/src/SMTP.php';

$mail = new PHPMailer(TRUE);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

/* Username (email address). */
$mail->Username = 'krakensocialmusiclibrary@gmail.com';

/* Google account password. */
$mail->Password = 's3amonst3r';

/* Open the try/catch block. */
try {
   /* Set the mail sender. */
   $mail->setFrom('krakensocialmusiclibrary@gmail.com', 'KrackenSML');

   /* Add a recipient. */
   $mail->addAddress('positron@windstream.net', 'Josiah');

   /* Set the subject. */
   $mail->Subject = 'Test';

   /* Set the mail message body. */
   $mail->Body = 'This is a test.';

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}

?>