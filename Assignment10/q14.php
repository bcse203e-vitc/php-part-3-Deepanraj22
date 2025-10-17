<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $to = 'example@domain.com';
    $sub = 'Contact Form Message';
    $msg = 'This is a test message from: ' . ($_POST['email'] ?? 'anonymous') . "\n\n" . ($_POST['message'] ?? '');
    $headers = 'From: ' . ($_POST['email'] ?? 'noreply@example.com');
    mail($to, $sub, $msg, $headers);
    $sent = true;
}
?>
<!doctype html>
<html><body>
<?php if(!empty($sent)) echo '<p>Mail Sent!</p>'; ?>
<form method="post">
    Your email: <input name="email"><br>
    Message: <textarea name="message"></textarea><br>
    <button type="submit">Send</button>
</form>
</body></html>
