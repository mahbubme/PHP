<?php 

// Die & exit functions
echo 'Hello';

// die('Page has ended.<br>');

echo ' World.<br>';

// Another example
@mysql_connect('localhost', 'alex', '') || die('Could not connect to database.');

echo 'Connected';

?>