<?php
require '../PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'djohnoliver@gmail.com';                 // SMTP username
$mail->Password = '!NULLrootSUDO';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('djohnoliver@gmail.com', 'Mailer');
$mail->addAddress('djohnoliver@gmail.com', 'Joe User');     // Add a recipient
/*              // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
$mail->isHTML(true);                                  // Set email format to HTML
 
$mail->Subject = 'ProfitBox';
$mail->Body    = 'Entramos em contacto consigo brevemente. Obrigado';
$mail->AltBody = 'A sua mensagem foi enviada com sucesso';

if(!$mail->send()) {
    echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}