<?php 

require ('core.inc.php');
require ('connect.inc.php');

if (!logged_in()) {
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['firstname']) && isset($_POST['surname'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_again = $_POST['password_again'];
        $password_hash = md5($password);
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        
        if (!empty($username) && !empty($password) && !empty($password_again) && !empty($firstname) && !empty($surname)) {
            if (strlen($username)>30 || strlen($firstname)>40 || strlen($surname)>40) {
                echo "Please ahear of maxlength of fields.";
            }else {
                if ($password!=$password_again) {
                    echo 'Password do not match.';
                }else {
                    $query = "SELECT `username` FROM `users` WHERE username='$username'";
                    $query_run = mysql_query($query);
                    
                    if (mysql_num_rows($query_run)==1) {
                        echo 'The Username '.$username. ' already exists.';
                    }else {
                        $query = "INSERT INTO `users` VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."')";
                        
                        if ($query_run=mysql_query($query)) {
                            header ('Location: register_success.php');
                        }else {
                            echo 'Sorry, You couldn\'t register at this time. Please try again later.';
                        }
                    }
                }    
            }
        }else {
            echo 'All fields are required.';
        }
     }
?> 
  
  <form action="register.php" method="POST">
      Username: <br> <input type="text" name="username" maxlength="30" value="<?php if (isset($username)) { echo $username; } ?>"/> <br><br>
      Password: <br> <input type="password" name="password"/> <br><br>
      Password again: <br> <input type="password" name="password_again"/> <br><br>
      Firstname: <br> <input type="text" name="firstname" maxlength="40" value="<?php if (isset($firstname)) { echo $firstname; } ?>"/> <br><br>
      Surname: <br> <input type="text" name="surname" maxlength="40" value="<?php if (isset($surname)) { echo $surname; } ?>"/> <br><br>
      <input type="submit" value="Submit"/>
  </form>
   
<?php 
}elseif (logged_in()) {
    echo 'You\'re already registered and logged in.';
}

?>


