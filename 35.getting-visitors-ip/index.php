<?php 

// Getting visitors ip address
require 'conf.inc.php';

foreach ($ip_blocked as $ip) {
    if ($ip==$ip_address) {
        die('You ip address, '.$ip.' has been blocked.');
    }
}

?>

<h1>Welcome!</h1>