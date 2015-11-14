<?php 

ini_set('display_erros', 'On');

$db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

$users = $db->query("
    SELECT * FROM users
");

$users = $users->fetchall(PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO</title>
</head>
<body>
    <?php foreach($users as $user) : ?>
        <h4><?php echo $user->first_name; ?></h4>
        <p><?php echo $user->email; ?></p>
    <?php endforeach; ?>
</body>
</html>