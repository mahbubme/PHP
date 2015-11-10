<?php 

require ('connect.inc.php');


$user_ip = $_SERVER['REMOTE_ADDR'];

// Check if ip already exists.
function ip_exists($ip) {
    global $user_ip; 
    $query = "SELECT `ip` FROM `hits_ip` WHERE `ip` = '$user_ip'";
    $query_run = mysql_query($query);
    $query_num_rows = mysql_num_rows($query_run);
    
    if ($query_num_rows==0) {
        return false;
    }else if ($query_num_rows>=1) {
        return true;
    }
}

// Adding ip into database
function ip_add($ip) {
    $query = "INSERT INTO `a_database`.`hits_ip` (`ip`) VALUES ('$ip');";
    @$query_run = mysql_query($query);
}

// Update count
function update_count() {
    $query = "SELECT `count` FROM `hits_count`";
    if (@$query_run = mysql_query($query)){
        $count = mysql_result($query_run, 0, 'count');
        $count_inc = $count + 1;
        
        $query_update = "UPDATE `hits_count` SET `count` = '$count_inc'";
        $query_update_run = mysql_query($query_update);
    }
    
}

// Run application and add user ip into database
if (!ip_exists($user_ip)) {
    update_count();
    ip_add($user_ip);
    echo 'Your IP added to database.';
}else {
    echo 'IP already exists.';
}


?>