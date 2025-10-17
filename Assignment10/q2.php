<?php
session_start();
$err = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';
if($user === 'admin' && $pass === '1234'){
$_SESSION['user'] = 'admin';
header('Location: welcome.php');
exit;
} else {
$err = 'Invalid credentials.';
}
}
?>
<!doctype html>
<html><body>
<?php if($err) echo "<p style='color:red;'>$err</p>"; ?>
<form method="post">
Username: <input name="user"><br>
Password: <input type="password" name="pass"><br>
<button type="submit">Login</button>
</form>
</body></html>
