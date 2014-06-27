<?php
$image = imagecreate(500, 500);
$maroon= imagecolorallocate($image, 0x8B, 0x25, 0x00);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
imagefilledrectangle($image, 50, 100, 10, 250, $black);
imagefilledrectangle($image, 0, 0, 0, 0, $maroon);
header("Content-Type: image/png");
imagepng($image);
?>
