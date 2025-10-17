<?php
// Q15: Feedback Form with Session and Email
session_start();
if(!isset($_SESSION['user'])) $_SESSION['user'] = 'Guest';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_SESSION['user'];
    $msg = 'Feedback from ' . $name . ': ' . ($_POST['feedback'] ?? '');
    // In real deployment, set proper headers and use mailer library
    mail('admin@vit.ac.in', 'Student Feedback', $msg, 'From: noreply@vit.ac.in');
    $done = true;
}
?>
<!doctype html>
<html><body>
<p>Hello <?php echo htmlspecialchars($_SESSION['user']); ?></p>
<?php if(!empty($done)) echo '<p>Thank you, feedback sent!</p>'; ?>
<form method="post">
    Feedback: <textarea name="feedback"></textarea><br>
    <button type="submit">Submit</button>
</form>
</body></html>
