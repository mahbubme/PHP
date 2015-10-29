<?php

// Uploading files
$name = $_FILES['file']['name'];
$extension = strtolower(substr($name, strpos($name, '.') + 1));
$type = $_FILES['file']['type'];
$size = $_FILES['file']['size'];

$max_size = 2000000;
$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)) {
    if (!empty($name)) {
        if (($type=='image/jpeg' || $type=='image/jpg') && ($extension=='jpg' || $extension=='jpeg') && $size<=$max_size) {
            
            $location = 'uploads/';
            
            if (move_uploaded_file($tmp_name, $location.$name)) {
                echo 'File uploaded';
            }else {
                echo 'There was an error.';
            }   
        }else {
            echo 'File must be jpg/jpeg and must be 2mb or less.';
        }    
    }else {
        echo 'Please choose a file.';
    }
}


?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"/><br><br>
    <input type="submit" value="Submit"/>
</form>