<?php 

// Connect to a database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$db_name = 'a_database';

$con_error = 'Could not connect to database.';

if (!@mysql_connect($db_host, $db_user, $db_pass) || !@mysql_select_db($db_name)) {
    die($conn_error);
}

?>