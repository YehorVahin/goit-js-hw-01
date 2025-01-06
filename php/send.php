<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['type'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$type = htmlspecialchars($type);

$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$type = trim($type);

mail("yehor.vahin@gmail.com", "Website application", "Name:".$fio.", E-mail: ".$email.", Phone: ".$phone.", Type: ".$type.", From: example2@mail.ru \r\n");
if (mail("yehor.vahin@gmail.com", "Website application", "Name:".$fio.", E-mail: ".$emailю.", Phone: ".$phone.", Type: ".$type.", From: example2@mail.ru \r\n"))
 {
    function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
  
goback();
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>