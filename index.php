<?php 

// Connecting to a Server and Database
$conn_error = 'Could not connect to database.';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'a_database';

if (!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)) {
    echo $conn_error;
}else {
    echo 'Connected.';
}

?>