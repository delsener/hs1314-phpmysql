<?php 
	include 'smtpmail/library.php';
	include "smtpmail/classes/class.phpmailer.php";

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	// account settings
	$host = "smtp.googlemail.com"; // smtp server
	$port = "465"; // port
	$user = "murch.buchheim@gmail.com"; // mail account
	$password = "murch.buchheim2013"; // password
	
	// mail settings
	$subject = "PHP/Mysql Kurs - Mail Test - David Elsener (elsendav)";
	$message = "Dieses Mail wurde per PHP Script gesendet.";
	$recipient = "elsendav@students.zhaw.ch";
	$recipient2 = "xobe@zhaw.ch";
	$headers = "From: elsendav@students.zhaw.ch";
	
	// print mail settings
	echo "<br>sending mail to $recipient with subject $subject and the following content: ";
	echo "<p>$message</p>";
	
	// send mail
	$mail   = new PHPMailer; // call the class
	$mail->IsSMTP();
	$mail->Host = $host; //Hostname of the mail server
	$mail->Port = $port; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = $user; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = $password; //Password for SMTP authentication
	$mail->AddReplyTo("david.elsener@gmx.net", "David Elsener"); //reply-to address
	$mail->SetFrom($user, "PHP Mailer"); //From address of the mail
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPDebug = 1;
	
	$mail->Subject = $subject; //Subject od your mail
	$mail->AddAddress($recipient, "elsendav"); //To address who will receive this email
	$mail->AddAddress($recipient2, "xobe"); //To address who will receive this email
	$mail->MsgHTML($message); //Put your body of the message you can place html code here
	$result = $mail->Send(); //Send the mails
	
	// print result
	echo "mail function returned: $result";
?>