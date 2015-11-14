<?php 

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=localhost;dbname=pdo', 'root', '');

$usersQuery = $db->query("SELECT * FROM users");

$users = $usersQuery->fetchAll(PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO</title>
</head>
<body>
    <p>There are <?php echo $usersQuery->rowCount(); ?> registered users.</p>
    <?php foreach($users as $user):?>
        <?php echo $user->email; ?><br>
    <?php endforeach; ?>
</body>
</html>

