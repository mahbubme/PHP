<?php

$browser = get_browser(null, true);

$browser = strtolower($browser['browser']);

if ($browser!='chrome') {
    echo 'You\re not using Chrome. Please do!.';
}else{
    echo 'You\re in using chrome browser.';
}

// print_r($browser);

?>