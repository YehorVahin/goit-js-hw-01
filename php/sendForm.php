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

    if (trim(!empty($_POST['names']))) {
        $body.='<p><strong>Name:</strong>'.$_POST['names'].'</p>';
    }
    if (trim(!empty($_POST['emails']))) {
        $body.='<p><strong>Email:</strong>'.$_POST['emails'].'</p>';
    }
    if (trim(!empty($_POST['phones']))) {
        $body.='<p><strong>Phone number:</strong>'.$_POST['phones'].'</p>';
    }
    if (trim(!empty($_POST['messages']))) {
        $body.='<p><strong>Message:</strong>'.$_POST['messages'].'</p>';
    }
    $mail->Body = $body;

    if (!$mail->send()) {
        $message = 'Error';
    }else {
        $message = 'Successful';
    }

    $response = ['messages'=> $message];

    header('Content-type: application/json');
    echo json_encode($response);

    $mail->send();
    echo 'Message has been sent';
 
?>