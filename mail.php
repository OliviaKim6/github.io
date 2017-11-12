<?php
require_once("class.phpmailer.php")
$name_01=$_POST['name'];
$mail_02=$_POST['mail'];
$subject=$_POST['subject'];
$msg_04=$_POST['message'];

$to='dbd03028@gmail.com';
$msg="보낸사람:$name_01\n".
"보낸사람 메일주소:$mail_02\n".
"메일내용:$msg_04";

$sendmail = mail($to,$subject,$msg);
if (!$mail->send()) {
echo "Mailer Error! ";
} else {
echo "메일 전송 완료! 감사합니다. 뒤로 가기를 눌러주세요";
}

?>
