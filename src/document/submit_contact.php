<?php

{

$email = $_POST['Email'];
$sub = $_POST['Subject'];
$desc = $_POST['Description'];
$first = $_POST['firstname'];
$last = $_POST['lastname']
$phont = $_POST['phone']

$to = 'navnath.p@edreamz.in';
$subject = $sub;
$message = $desc;
$headers = "From: " . $email . "\r\n";
$headers .= "Cc: ". "prajakta.d@edreamz.in" . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
						
//$mail = mail($to, $subject, $message, $headers);
if($mail == true)
{
	//echo "mail send successfully...";
	header("Location: contact.html");
	echo "your mail send successfully...";
	//die();
}

}


?>