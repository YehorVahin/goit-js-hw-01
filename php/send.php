<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 require'PHPMailer/src/Exception.php';
 require'PHPMailer/src/PHPMailer.php';

 $mail = new PHPMailer(true);
 $mail->CharSet = "UTF-8";
//  $mail->setLanguage('eng', 'PHPMailer/language/');
 $mail->isHTML(true);

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$type = $_POST["type"];

$body = $name .''. $email .''. $phone .''. $type;









//  $mail->setFrom('davyjohns322@gmail.com');
  $mail->addAddress('yehor.vahin@gmail.com');
  $mail->Subject = 'Новая заявка с сайта';

//  $body = '<h1>Congratulations</h1>';

//  if (trim(!empty($_POST['name']))) {
//     $body.='<p><strong>E-mail:</strong> '.$_POST['name'].'</p>';
//  }
//  if (trim(!empty($_POST['phone']))) {
//     $body.='<p><strong>E-mail:</strong> '.$_POST['phone'].'</p>';
//  }
//  if (trim(!empty($_POST['email']))) {
//     $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
//  }
//  if (trim(!empty($_POST['type']))) {
//     $body.='<p><strong>E-mail:</strong> '.$_POST['type'].'</p>';
//  }

  $mail->Body = $body;

  $mail->send();

//  if (!$mail->send()) {
//     $message = 'Error';
//  }else {
//     $message = 'Succesful';
//  }
//  $response = ['message' => $message];

//  header('Content-type: application/json');
//  echo json_encode($response);
?>