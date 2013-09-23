<?php 
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	// mail settings
	$subject = "PHP/Mysql Kurs - Mail Test - David Elsener (elsendav)";
	$message = "Dieses Mail wurde per PHP Script gesendet.";
	$recipient = "elsendav@students.zhaw.ch";
	$headers = "From: elsendav@students.zhaw.ch";
	
	// print mail settings
	echo "<br>sending mail to $recipient with subject $subject and the following content: ";
	echo "<p>$message</p>";
	
	// send mail
	$result = mail($recipient, $subject, $message, $headers);
	
	// print result
	echo "mail function returned: $result";
?>