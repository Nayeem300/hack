<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';
$email_body = "user Name: $name.\n".
              "user Email: $visitor_email.\n".
              "subject : $subject.\n".
              "user message: $message.\n"; 

$to = 'hasanlamim35@gamil.com';

$headers = "From: $email_from \r\n";

$headers = "Replay-to: $visitor_email \r\n";

mail($to.$email_subject,$email_body,$headers);

header("Location: contact.html");




?>