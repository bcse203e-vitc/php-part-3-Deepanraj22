<?php
// Q7: Add Text on an Image (watermark)
$srcFile = __DIR__ . '/sample.jpg';
if(!file_exists($srcFile)){
    header('Content-Type: text/plain');
    echo 'Place a sample.jpg in the same folder to run this demo.';
    exit;
}
$img = imagecreatefromjpeg($srcFile);
$color = imagecolorallocate($img, 0, 0, 255);
imagestring($img, 5, 10, 10, 'VIT Chennai', $color);
header('Content-Type: image/jpeg');
imagejpeg($img);
imagedestroy($img);
?>