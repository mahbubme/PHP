<?php 

// Logical Operators
$number = 100450;

$upper = 1000;
$lower = 500;

if ( $number>=$lower && $number<=$upper ) {
    echo 'Ok.<br>';
}else {
    echo 'Number must be between '.$lower.' and '.$upper.', Inclusive<br>';
}

// By using or
$number = 4;

$canbe1 = 2;
$canbe2 = 4;

if ( $number==$canbe1 || $number==$canbe2 ) {
    echo 'Ok<br>';
}else{
    echo 'Not ok<br>';
}

// By using Not
$number = 10;

$canbe1 = 2;
$canbe2 = 4;

if ( !($number==$canbe1) && !($number==$canbe2) ) {
   echo 'Not ok.'; 
}else{
    echo 'Ok.';
}

?>