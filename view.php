<?php 

// Session result
session_start();

echo 'Welcome, '.$_SESSION['username'].' Your age is '.$_SESSION['age'].'.';

?>