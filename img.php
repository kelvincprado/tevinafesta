<?php
session_start();
$cd = $_SESSION['cd'];

if (!extension_loaded('gd')) { dl('php_gd2.dll'); };
$img = imagecreate(100,38);//44,18

$bg = imagecolorallocate($img, 145, 71, 165);
$text_color = imagecolorallocate($img, 254, 254, 254);
imagestring($img, 135, 15, 12, "$cd", $text_color);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?>