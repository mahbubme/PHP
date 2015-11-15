<?php 

$db = new mysqli('localhost', 'root', '', 'pdo');


if (!empty($_POST)) {
    $email = $_POST['email'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    
    $prepared = $db->prepare("
        INSERT INTO users (email, first_name, last_name, created) 
        VALUES (?, ?, ?, NOW())
    ");
    
    $prepared->bind_param('sss', $email, $firstName, $lastName);
    
    $prepared->execute();
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mysqli</title>
</head>
<body>
    <form action="prepare_statement.php" method="POST" autocomplete="off">
        <input type="text" name="email" placeholder="email" />
        <input type="text" name="first_name" placeholder="first_name" />
        <input type="text" name="last_name" placeholder="last_name" />
        <input type="submit" value="Sign up"/>
    </form>
</body>
</html>