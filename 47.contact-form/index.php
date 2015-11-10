<?php 

// Creating a simple contact form
if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_message'])) {
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];
    
    if (!empty($name) && !empty($email) && !empty($message)) {
        if (strlen($name)>25 || strlen($email)>50 || strlen($message)>1000) {
            echo 'Sorry, Maxlength for some field has been exceeded.';
        }else {
            $to = 'bijna@mahbub.me';
            $subject = 'Contact form submitted.';
            $body = $name."\n".$message;
            $headers = 'From: '.$email;
            
            if (mail($to, $subject, $body, $headers)) {
                echo 'Thanks for contacting us.';
            } else {
                echo 'Sorry, an error occured. Please again later.';  
            }   
        }
    } else {
        echo 'Please fill all the fields.';
    }
}

?>

<form action="index.php" method="POST">
    Name: <br><input type="text" name="contact_name"/> <br><br>
    Email Address: <br><input type="email" name="contact_email"/> <br><br>
    Message: <br> <textarea name="contact_message" rows="6" col="30"></textarea><br><br>
    <input type="submit" value="Send"/>
</form>