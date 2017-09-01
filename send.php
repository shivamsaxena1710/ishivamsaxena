<?php
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$message = $_POST['message'];
$email_from = 'info@ishivamsaxena.ml';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $first_name.\n".
    "Here is the message:\n $email $sub $message".
$to = "shivambhushan1717@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: index.html');
?>
