<?php 

// Watermarking images
header ('Content-type: image/jpeg');

if (isset($_GET['source'])) {
    $source = $_GET['source'];
    
    $watermark = imagecreatefrompng('logo.png');
    $watermark_width = imagesx($watermark);
    $watermark_height = imagesy($watermark);
    
    $image = imagecreatetruecolor($watermark_width, $watermark_height);
    $image = imagecreatefromjpeg($source);
    
    $image_size = getimagesize($source);
    $x = $image_size['0'] - $watermark_width - 10;
    $y = $image_size['1'] - $watermark_height - 0;
    
    imagecopymerge($image, $watermark, $x, $y, 0, 0, $watermark_width, $watermark_height, 30);
    imagejpeg($image);
    
}

?>