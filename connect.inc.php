<?php 

// Connect to database
$conn_error = 'Could not connect to database.';

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$db_name = 'a_database';

if (!@mysql_connect($db_host, $db_user, $db_pass) || !@mysql_select_db($db_name)) {
    echo $conn_error;
}

?>