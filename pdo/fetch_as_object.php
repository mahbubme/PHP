<?php 

ini_set('display_erros', 'On');

// Object class 
class User {
    
   public function getFullName () {
        return "{$this->first_name} {$this->last_name}";   
   } 
   
}

$db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

$users = $db->query("
    SELECT * FROM users
");

// Set fetch mode
$users->setFetchMode(PDO::FETCH_CLASS, 'User');

// echo '<pre>', var_dump($users) ,'<pre>';

while ($user = $users->fetch()) {
    echo $user->getFullName().'<br>';    
}


?>