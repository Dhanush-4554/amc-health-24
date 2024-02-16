<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_message = "
Name: ".$name."
Email: ".$email."
Phone: ".$phone."
Subject: ".$subject."
Message: ".$message."

";

$to = "chethanvhoypuc2@gmail.com"; // Change this to your email address
$mail_subject = "New Message";

// Make sure to have proper headers for the email
$headers = "From: $email \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Send the email
$mail_sent = mail($to, $mail_subject, $email_message, $headers);

// Check if the email was sent successfully
if ($mail_sent) {
    header("Location: ../mail-success.html");
} else {
    echo "Failed to send email. Please try again.";
}
?>
