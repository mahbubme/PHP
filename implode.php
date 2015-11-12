<?php 

// Collect and process data
$name = 'Mahbub';
$email = 'mail@mahbub.me';
$message = 'Really great site. I love it.';
$telephone = '01234567';

$data = array (
    'name'      => $name,
    'email'     => $email,
    'message'   => $message,
    'telephone' => $telephone
);

$fields_sql = '`'.implode('`, `', array_keys($data)).'`';
$values_sql = '\''.implode('\', \'', $data).'\'';

$sql = "
    INSERT INTO `table` ($fields_sql) 
    VALUES ($values_sql)
";

echo $sql;


?>