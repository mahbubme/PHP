<?php 

ini_set('display_erros', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// try {
//     $db->query("INVALID");
// }catch (PDOException $e) {
//     var_dump($e->getMessage());
// }

// $updateUser = $db->query("
//     UPDATE users 
//     SET last_name = 'Smith' 
//     WHERE id = 1
// ");


$users = $db->query("
    SELECT * FROM users
");

// echo '<pre>',var_dump($users->fetchObject()->email),'<pre>';
// echo '<pre>',var_dump($users->fetch(PDO::FETCH_ASSOC)['email']),'<pre>';

// $users = $users->fetch(PDO::FETCH_ASSOC); 

// echo $users['email'];

// echo '<pre>', var_dump($users->fetchall(PDO::FETCH_ASSOC)), '<pre>'

// while ($user = $users->fetch(PDO::FETCH_ASSOC)) {
//     echo $user['email'].'<br>';    
// }


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO</title>
</head>
<body>
    <?php while ($user = $users->fetchObject()): ?>
        <div class="user">
            <h4><?php echo $user->first_name; ?></h4>
            <p><?php echo $user->email; ?></p>
        </div>
    <?php endwhile; ?>
</body>
</html>



