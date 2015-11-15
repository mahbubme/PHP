<?php 

$db = new mysqli('localhost', 'root', '', 'pdo');

$count = $db->query("SELECT SQL_CALC_FOUND_ROWS id FROM users");
$countResult = $db->query("SELECT FOUND_ROWS() as counts");

// var_dump($countResult->fetch_assoc());

$countResult = $countResult->fetch_object();

echo $countResult->counts;

?>