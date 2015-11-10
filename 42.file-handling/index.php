<?php

// File Handling: Listing Files
$directory = 'files';

if ($handle=opendir($directory.'/')) {
    echo 'Looking inside \''.$directory.'\':<br>';
    
    while ($file=readdir($handle)) {
        if ($file!='.' && $file!='..') {
            echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
        } 
    }
}

// File Handling: Checking if a File Exists

$filename = 'file2.txt';

if (file_exists($filename)) {
    echo 'File already exist.<br>';
}else {
    $handle = fopen($filename, 'w');
    fwrite($handle, 'I have nothing to write.');
    fclose($handle);
}

// File Handling: Deleting and Renaming Files

// deleting files
$filename = 'filetodelete.txt';

if (@unlink($filename)) {
    echo 'File '.$filename.' has been deleted.<br>';
}else {
    echo 'File cannot be deleted.<br>';
}

// renaming file name
$filename = 'filetorename.txt';
$rand = rand(10000, 99999);

if (@rename($filename, $rand.'.txt')) {
    echo 'File <strong>'.$filename.'</strong> has been renamed to '.$rand.'.txt';
}else {
    echo 'Error renaming.';
    
}



?>