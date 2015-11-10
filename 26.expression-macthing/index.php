<?php 

// Expression matching
$string = 'This is a string.';

if (preg_match('/is/', $string)) {
    echo 'Match found.';
}else {
    echo 'No match found.';
}

// More on expression matching
function has_space($string) {
   if (preg_match('/ /', $string)) {
       return true;
   }else {
       return false;
   }
}

$string = 'This doesn\'t have a space';

if (has_space($string)) {
   echo '<br>Has at least one space.'; 
}else {
   echo '<br>Has no spaces.'; 
}

?>