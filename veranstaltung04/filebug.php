<?php 

include 'smtpmail/library.php';
include "smtpmail/classes/class.phpmailer.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);

# general (static) mail account settings
define("HOST", "smtp.googlemail.com"); // smtp server
define("PORT", "465"); // port
define("USER", "murch.buchheim@gmail.com"	); // mail account
define("PASSWORD", "murch.buchheim2013"); // password
define("RECIPIENT1", "david.elsener@gmail.com"); // mail account
define("RECIPIENT2", "david.elsener@gmx.net"); // password

function validatePassword() {
	if (!isset($_POST["password"])) {
		return false;
	}
	return $_POST["password"] == "mysqlphp2013";
}



function sendBugReport () {
	$message = createMailMessage();
	$headers = "From: Bug-Reporter";
	
	// configure mail
	$mail   = new PHPMailer; // call the class
	$mail->IsSMTP();
	$mail->Host = HOST; //Hostname of the mail server
	$mail->Port = PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = USER; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = PASSWORD; //Password for SMTP authentication
	$mail->AddReplyTo(RECIPIENT1, "David Elsener"); //reply-to address
	$mail->SetFrom(USER, "PHP Mailer"); //From address of the mail
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPDebug = 1;
	$mail->IsHTML(true); // send as HTML
	
	// specific mail content
	$mail->Subject = 'PHP/Mysql Kurs - BugReport from '.$_POST["name"]; //Subject od your mail
	$mail->AddAddress(RECIPIENT1, RECIPIENT1); //To address who will receive this email
	$mail->AddAddress(RECIPIENT2, RECIPIENT2); //To address who will receive this email
	$mail->MsgHTML(createMailMessage()); 
	
	# add attachment
	$file = $_FILES['file'];
	var_dump($file);
	$mail->AddAttachment($file['tmp_name'], $file['name']);
	
	$result = $mail->Send(); //Send the mails
}

function createMailMessage() {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$web = $_POST["web"];
	$text= $_POST["text"];
	$priority = $_POST["priority"];
	$bugtype = $_POST["bugtype"];
	$callback = $_POST["callback"];
	$repro= $_POST["repro"];
	
	return "<h1>PHP Bug Reporter</h1>
			 <p>Name: <b>$name</b></p>
			 <p>Email: <b>$email</b></p>
			 <p>Betroffene Webseite: <b>$web</b></p>
			 <p>Nachricht:<br>$text</b></p>
			 <p>Priorit&auml;t: <b>$priority</b>, Bugtyp: <b>$bugtype</b>, Reproduzierbar: <b>$repro</b></p>
			 <p>R&uuml;ckruf erforderlich: <b>$callback</b></p>
			";
}

?>