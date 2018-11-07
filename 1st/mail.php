<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n  Website: $website \n  Type: $type \n Message: $message";
$recipient = "create@aurimasb.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='http://aurimasb.com' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
