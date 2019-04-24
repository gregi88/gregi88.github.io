<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "grzes1234s@onet.pl";

$email_subject = "Contact Form";

$email_body = "User Name: $name.\n".
              "User email: $visitor_email.\n".
              "User message: $message.\n";

$to = "grzes1234s@onet.pl";

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html.erb");

?>
