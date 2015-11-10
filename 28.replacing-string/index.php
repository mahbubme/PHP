<?php 

// Replacing string
$string = 'This part don\'t search. This part search.';
$string_new = substr_replace($string, 'Mahbub', 29, 4);

echo $string_new;

// Replacing predefind part of a string
$find = array('is', 'string', 'example');
$replace = array('IS', 'STRING', '');

$string = 'This is a string, and is an example.';
$new_string = str_replace($find, $replace, $string);

echo '<br>'.$new_string;

?>