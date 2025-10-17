<?php
// Q13: Personalized Greeting Using Sessions
session_start();
if(!isset($_SESSION['name'])) $_SESSION['name'] = 'Student';
?>
<!doctype html>
<html><body>
<p>Hello, <?php echo htmlspecialchars($_SESSION['name']); ?>! Welcome to the PHP lab.</p>
<form method="post">
    Set name: <input name="name"><button type="submit">Set</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']==='POST' && !empty($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;
}
?>
</body></html>
