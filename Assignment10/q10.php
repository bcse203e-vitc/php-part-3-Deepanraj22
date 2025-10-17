<?php
// Q10: Send an Email with mail() (basic example)
// NOTE: mail() may not work on all systems without proper SMTP configuration.
$to = 'receiver@example.com';
$subject = 'Test Email';
$message = 'This is a test email from PHP.';
$headers = 'From: admin@example.com';
if(mail($to, $subject, $message, $headers)){
    echo 'Mail sent successfully.';
} else {
    echo 'Mail failed. Configure your mail server to enable this.';
}
?>