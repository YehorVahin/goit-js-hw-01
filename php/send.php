<?php
// //Import PHPMailer classes into the global namespace
// //These must be at the top of your script, not inside a function
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->isSMTP();                                          //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
//     $mail->Username   = '';                                   //SMTP username
//     $mail->Password   = '';                                   //SMTP password
//     $mail->SMTPSecure = 'TLS';                                //Enable implicit TLS encryption
//     $mail->Port       = 587;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom('davyjohns322@gmail.com', 'form');
//     $mail->addAddress('yehor.vahin@gmail.com');     //Add a recipient
//     $body = '<p>Email: '.$_POST['email'].'</p>' . '<p>User name: '.$_POST['name'].'</p>';

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->CharSet = 'UTF-8';
//     $mail->Subject = 'Message';
//     $mail->Body    = $body;

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
 
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'test.local';
$mail->SMTPAuth = true;
$mail->Username = 'davyjohns322@gmail.com';
$mail->Password = '';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
 
$mail->setFrom($email, $name);
$mail->addAddress('yehor.vahin@gmail.com');
$mail->isHTML(true);
 
$mail->Subject = 'Сообщение с формы обратной связи';
$mail->Body    = "От: $name <br> Email: $email <br> Сообщение: $phone";
 
if(!$mail->send()) {
    echo 'Ошибка при отправке сообщения.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Сообщение успешно отправлено!';
}
?>