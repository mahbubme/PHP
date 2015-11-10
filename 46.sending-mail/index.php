<?php 

// Mail function
$to = 'mahbuburrahmanmihir@gmail.com';
$subject = 'This is a subject.';
$body = 'This is a test email from my mail server.'."\n\n".'Have you got it?';
$headers = 'From: Mahbubur Rahman <bijna@mahbub.me>';

if (mail($to, $subject, $body, $headers)) {
    echo 'Email has been send to '.$to;
} else {
    echo 'There was an error sending the email.';
}


?>