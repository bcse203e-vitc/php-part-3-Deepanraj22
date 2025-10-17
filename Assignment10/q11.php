<?php

$img = imagecreate(200,200);
for($i=0;$i<200;$i++){
    $col = imagecolorallocate($img, $i, $i, 255);
    imageline($img, $i, 0, $i, 200, $col);
}
header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
?>
