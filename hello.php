<?php
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$content = $_POST['content'];

$formcontent=" From: $name \n email: $email; \n subject : $sub \n Message: $content";
$recipient = "lkshkarki@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
