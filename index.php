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
    echo 'File already exist.';
}else {
    $handle = fopen($filename, 'w');
    fwrite($handle, 'I have nothing to write.');
    fclose($handle);
}

?>