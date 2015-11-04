<?php 

ob_start();
session_start();

$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = $_SERVER['HTTP_REFERER'];

function logged_in() {
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    }else {
        return false;
    }
}

function getuserfield($field) {
    $query = "SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
    if ($query_run=mysql_query($query)) {
        if ($query_result=mysql_result($query_run, 0, $field)) {
            return $query_result;
        }
    }
}

?>