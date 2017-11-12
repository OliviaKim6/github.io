<?php
require_once("class.phpmailer.php")
$name_01=$_POST['name'];
$mail_02=$_POST['mail'];
$head_03=$_POST['subject'];
$msg_04=$_POST['message'];

$to='dbd03028@gmail.com';
$subject=$head_03;
$msg="보낸사람:$name_01\n".
"보낸사람 메일주소:$mail_02\n".
"메일내용:$msg_04";

$sendmail = mail($to,$subject,$msg);
?>


