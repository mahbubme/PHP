<?php

include('form.php');
require('conf.inc.php');

if (isset($_POST['submit'])) {
    echo 'Process One';
}

echo '<br><img src="'.$images.'header.gif">';

?>