<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/Exception.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'PHPMailer/langauge/');
    $mail->isHTML(true);

    $mail->setFrom('davyjohns322@gmail.com', 'Фрилансер по жизни');
    $mail->addAddress('yehor.vahin@gmail.com');
    $mail->Subject = 'Form from Web-Site';

    $body = '<h1>New form from Web-Site!</h1>';

    if (trim(!empty($_POST['name']))) {
        $body.='<p><strong>Name:</strong>'.$_POST['name'].'</p>';
    }
    if (trim(!empty($_POST['email']))) {
        $body.='<p><strong>Email:</strong>'.$_POST['email'].'</p>';
    }
    if (trim(!empty($_POST['phone']))) {
        $body.='<p><strong>Phone number:</strong>'.$_POST['phone'].'</p>';
    }
    if (trim(!empty($_POST['type']))) {
        $body.='<p><strong>Type of bussines:</strong>'.$_POST['type'].'</p>';
    }
    if (trim(!empty($_POST['message']))) {
        $body.='<p><strong>Message:</strong>'.$_POST['message'].'</p>';
    }
    $mail->Body = $body;

    if (!$mail->send()) {
        $message = 'Error';
    }else {
        $message = 'Successful';
    }

    $response = ['message'=> $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>