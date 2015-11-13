<?php  

$string = trim('    Blue    car     sales      ');
$keywords = preg_split('/[\s]+/', $string);

print_r ($keywords);



?>