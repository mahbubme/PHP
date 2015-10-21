<?php 

$find = array('mahbub', 'billy', 'dale');
$replace = array('m****b', 'b***y', 'd**e');

// Word censoring
if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
    $user_input = $_POST['user_input'];
    $user_input_new = str_ireplace($find, $replace, $user_input);
    
    echo $user_input_new;
}

?>

<hr>
<form action="index.php" method="POST">
    <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea><br><br>
    <input type="submit" value="Submit"/>
</form>