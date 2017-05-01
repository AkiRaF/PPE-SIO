<?php

	$to = 'supaporn.choppard@gmail.com';
	$subject = 'Testing sendmail.exe';
	$message = 'hi, testest sendamil!';
	$headers = 'From: akirafay07@gmail.com'."\r\n".
	'Reply-To: akirafay07@gmail.com'."\r\n".
	'MIME-version: 1.0'."\r\n".'Content-type: text/html; charset=iso-8859-1'."\r\n".
	'X-Mailer: PHP/'.phpversion();
	//mail($to, $subject, $message, $headers);
	if(mail($to, $subject, $message, $headers)){
		echo "Email sent";
	}else{
		echo "Email sending failled";
	}
	
?>