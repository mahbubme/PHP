<?php ob_start(); ?>

<h1>Test page</h1>
<p>This is test page.</p>

<?php 

// Redirect to another url or page
$redirect_page = 'http://mahbub.me';
$redirect = false;

if ($redirect==true) {
   header('Location: '.$redirect_page); 
}

ob_end_flush();

?>