<?php 

// Scaling down images to thumbnails
header('Content-Type: image/jpeg');

if (isset($_GET['image'])) {
    echo $image = $_GET['image'];
    
    $image_size = getimagesize($image);
    $image_width = $image_size[0];
    $image_height = $image_size[1];
    
    $new_size = ($image_width + $image_height)/($image_width*($image_height/45));
    $new_width = $image_width * $new_size;
    $new_height = $image_height * $new_size;
    
    $new_image = imagecreatetruecolor($new_width, $new_height);
    $old_image = imagecreatefromjpeg($image);
    
    imagecopyresized($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $image_width, $image_height);
    imagejpeg($new_image, $image.'.thumb.jpg', 100);
    
}

?>