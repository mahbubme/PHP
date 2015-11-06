<?php 

session_start();

// Generating captcha image 
header('Content-type: image/jpeg');

$text = $_SESSION['secure'];
$font_size = 30;

$image_width = 110;
$image_height = 40;

$image = imagecreate($image_width, $image_height);
imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, $font_size, 0, 0, $text, $text_color);
imagejpeg($image);


?>