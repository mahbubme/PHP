<?php 

// Open and write in a file
$handle = fopen('names.txt', 'w');

fwrite($handle, 'Mahbub'."\n");
fwrite($handle, 'Alex');

fclose($handle);

echo 'Written.';


?>