<?php 

ini_set('display_erros', 'On');

$db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

if (!empty($_POST)) {
    $email = $_POST['email'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    
    $user = $db->prepare("
        INSERT INTO users (email, first_name, last_name) 
        VALUES (:email, :first_name, :last_name)
    ");
    
    $user->execute([
        'email' => $email,
        'first_name' => $firstName,
        'last_name' => $lastName,
    ]);
    
    // Last inserted id 
    var_dump($db->lastInsertId());
    die();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO</title>
</head>
<body>
    <form action="inserting.php" method="POST" autocomplete="off">
        <input type="text" name="email" placeholder="Email" />
        <input type="text" name="first_name" placeholder="First Name" />
        <input type="text" name="last_name" placeholder="Last Name" />
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>