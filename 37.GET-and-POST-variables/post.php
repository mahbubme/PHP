<?php 

// Working with $_POST variables
$match = 'me123';

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (!empty($password)) {
        if ($password==$match) {
            echo 'Password is correct';
        }else {
            echo 'Password is not correct.';
        }
    }else {
        echo 'Please enter password.';
    }
}

?>

<form action="post.php" method="POST">
    <input type="password" name="password"/> <br><br>
    <input type="submit" value="Submit"/>
</form>