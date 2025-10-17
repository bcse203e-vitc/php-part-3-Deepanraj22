<?php
// Q3: Remember Me Functionality with Cookies
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'] ?? '';
    if(isset($_POST['remember'])){
        setcookie('username', $username, time() + 86400*30); // 30 days
    } else {
        setcookie('username', '', time() - 3600); // delete cookie
    }
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;
}
?>
<!doctype html>
<html><body>
<p>Welcome <?php echo htmlspecialchars($_COOKIE['username'] ?? 'Guest'); ?></p>
<form method="post">
    Username: <input name="username" value="<?php echo htmlspecialchars($_COOKIE['username'] ?? ''); ?>"><br>
    Remember me: <input type="checkbox" name="remember"><br>
    <button type="submit">Save</button>
</form>
</body></html>
