<?php 
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$description = $_REQUEST['description'];
 
$to = 'info@maxnetcommercial.com';
//$to = 'navnath.p@edreamz.in';
$subject = $subject;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$message = $description;
// More headers
//$headers .= 'From: <digvijay.b@edreamz.in>' . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers))
 {
  echo "Your details were sent successfully!";
 }
 else
 {
  echo "Something went wrong";
 } 
?>
