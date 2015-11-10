<?php 

mysql_connect('localhost', 'root', '');
mysql_select_db('a_database');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!empty($username) && !empty($password)) {
        echo $username.'<br>'.$password.'<br>';
        
        $query = "SELECT `id` FROM `sql_injection` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."'";
        $query_run = mysql_query($query);
        
        if (mysql_num_rows($query_run)==1) {
            echo 'Login Success.';
        }else {
            echo 'Invalid username and password.';
        }
    }else {
        echo 'Please input username and password.';
    }
    
}


?>

<form action="index.php" method="POST">
    Username: <br> <input type="text" name="username"/> <br><br> 
    Password: <br> <input type="password" name="password"/> <br><br> 
    <input type="submit" value="Log in"/>
</form>