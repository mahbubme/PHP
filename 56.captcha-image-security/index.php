<?php 

session_start();

// processing captcha function
if (!isset($_SESSION['secure'])) {
    $_SESSION['secure'] = rand(1000, 9999);
}else {
    if (!empty($_POST['secure'])) {
        if ($_SESSION['secure']==$_POST['secure']) {
            echo 'A match!';
        }else {
            echo 'Incorrect, try again.';
            $_SESSION['secure'] = rand(1000, 9999);
        }     
    }else {
        echo 'Please input character.';
        $_SESSION['secure'] = rand(1000, 9999);
    }
}


?>

<br>
<img src="generate.php"><br>

<form action="index.php" method="POST">
    Type the value you see: <input type="text" size="6" name="secure"/>
    <input type="submit" value="Submit"/>
</form>