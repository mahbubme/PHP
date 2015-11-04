<?php 

require ('core.inc.php');
require ('connect.inc.php');

if (logged_in()) {
    $firstname = getuserfield('firstname');
    $surname = getuserfield('surname');
    echo 'You are logged in '.$firstname.' '.$surname.'. <a href="logout.php">Log out</a>';

}else {
    include ('loginform.inc.php');
}

?>
