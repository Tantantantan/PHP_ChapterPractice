<?php
$image = imagecreate(500, 500);
$white = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);

imagestring($image, 5, 50,  100, "ABCDabcd", $black);
imagestring($image, 4, 100, 200, "ABCDabcd", $black);
imagestring($image, 3, 150, 300, "ABCDabcd", $black);
imagestring($image, 2, 200, 400, "ABCDabcd", $black);
imagestring($image, 1, 250, 450, "ABCDabcd", $black);

header("Content-Type: image/png");
imagepng($image);

?>