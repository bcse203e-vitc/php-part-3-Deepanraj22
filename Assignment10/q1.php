<?php
// Q1: Cookie-Based Visit Counter
if(isset($_COOKIE['visits'])) {
    $count = intval($_COOKIE['visits']) + 1;
} else {
    $count = 1;
}
setcookie('visits', $count, time() + 3600); // cookie valid for 1 hour
?>
<!doctype html>
<html><body>
<?php echo "Welcome! You have visited this page $count times."; ?>
</body></html>
