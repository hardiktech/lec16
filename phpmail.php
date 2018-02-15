<?php
require_once "class.phpmailer.php";
require_once "class.smtp.php";
//if ($_SERVER ["REQUEST_METHOD"]=="POST"){
if ($_SERVER ["REQUEST_METHOD"]=="POST"){
	$from=$_POST['from'];
	$password=$_POST['password'];
	$port=$_POST['port'];
	$to=$_POST['to'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$mail=new PHPMailer;
	$mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username =$from;                 // dtlmailtestacc@gmail.com SMTP username
    $mail->Password = $password;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $port;   //port no 587 when you use gmail and tls  
	$mail->setFrom($from, 'your name');
	$mail->addAddress($to,"recipent name");
	$mail->AddReplyTo($from,"yourname");
	$mail->WordWrap=50;
	$mail->isHTML(true);
	$mail->Subject=$subject;
	$mail->Body=$message;
	$mail->AltBody="This is body in the palin text for non html mail clients";
	if(!$mail->send()){
		echo "Mailer error:".$mail->ErrorInfo;
		}else{
			echo"Messgae has been sent successfully";
			}
}
?>