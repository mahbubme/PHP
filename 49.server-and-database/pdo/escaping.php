<?php 

ini_set('display_erros', 'On');

$db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

if (!empty($_GET['user'])) {
    
    echo $userid = $db->quote($_GET['user']); // Simple escaping method
    
    $user = $db->query("SELECT * FROM users WHERE ID = {$userid}");
    
    var_dump($user->fetchObject());
}



?>