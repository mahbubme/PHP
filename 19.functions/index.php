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

// Functions with a return value

function addTwo($number1, $number2) {
    $result = $number1 + $number2;
    return $result;
}

function divide($number1, $number2) {
    $result = $number1 / $number2;
    return $result;
}

$sum = divide(addTwo(10, 10), addTwo(5, 5));
echo $sum;

?>
