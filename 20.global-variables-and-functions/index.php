<?php 

// Global variables and functions
$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip() {
    global $user_ip;
    $string = 'Your IP address is '.$user_ip;
    echo $string;
}

echo_ip();

?>