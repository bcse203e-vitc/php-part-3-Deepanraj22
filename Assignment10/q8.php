<?php
$srcFile = __DIR__ . '/image.jpg';
if(!file_exists($srcFile)){
    header('Content-Type: text/plain');
    echo 'Place an image.jpg in the same folder to run this demo.';
    exit;
}
$src = imagecreatefromjpeg($srcFile);
$new = imagescale($src, 200, 150);
header('Content-Type: image/jpeg');
imagejpeg($new);
imagedestroy($src);
imagedestroy($new);
?>
