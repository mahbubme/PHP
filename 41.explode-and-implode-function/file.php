<?php 

// Explode function
$filename = 'names.txt';
$handle = fopen($filename, 'r');

$datain = fread($handle, filesize($filename));

$names_array = explode(',', $datain);

foreach ($names_array as $name) {
    echo trim($name).'<br>';
}

?>