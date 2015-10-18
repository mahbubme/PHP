<?php 

// Switch Statement
$number = 6;

switch ($number) {
    case 1:
        echo 'One<br>';
    break;
    
    case 2:
        echo 'Two<br>';
    break;
    
    case 3:
        echo 'Three<br>';
    break;
    
    default:
        echo 'Number not found.<br>';
    break;
}

// Another good example
$day = 'Sunday';

switch ($day) {
    case 'Saturday':
    case 'Sunday':
        echo 'It\'s a weekend.';
    break;
    
    default:
        echo 'Not a weekend.';
    break;
}

?>