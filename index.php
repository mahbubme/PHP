<?php 

// Basic functions
function MyName() {
    echo 'Mahbubur Rahman<br>';
}

echo 'My name is ';
MyName();

// Functions with arguments
$num1 = 5;
$num2 = 30;

function add($number1, $number2) {
    echo $number1 + $number2.'<br>';
}

//
add($num1, $num2);

function displayDate($day, $date, $year) {
    echo $day.' '.$date.' '.$year.'<br>';
}

displayDate('Sunday', 18, 2015);



?>
