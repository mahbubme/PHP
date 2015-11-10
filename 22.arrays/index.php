<?php 


// Arrays
$foods = array('Pasta', 'Pizza', 'Salad', 'Vegetables');
$foods[4] = 'Fruit'; 

print_r($foods);

echo '<br>'.$foods[4];

// Associative arrays
$food = array('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>100, 'Vegetables'=>50);

echo '<br>'.$food[Pizza];


// Multi dimensional arrays
$food = array('Healthy'=>
                        array('Salad', 'Vegetables', 'Pasta'), 
              'Unhealthy'=>
                        array('Pizza', 'Ice Cream'));

echo '<br>'.$food['Unhealthy'][1];

?>