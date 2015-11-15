<?php 

$db = new mysqli('localhost', 'root', '', 'pdo');

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name FROM users");

// var_dump($user->fetch_object());

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mysqli</title>
</head>
<body>
    <p>We currently have <?php echo $users->num_rows; ?> registered users.</p>
    <?php while($user = $users->fetch_assoc()):?>
        <p><?php echo $user['full_name']; ?>, <?php echo $user['email']; ?>, <?php echo $user['created']; ?></p>
    <?php endwhile; ?>
</body>
</html>