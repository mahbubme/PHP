<?php

// Creating a find and replace application
if (isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])) {
    $offset = 0;
    $text = $_POST['text'];
    $search = $_POST['searchfor'];
    $replace = $_POST['replacewith'];
    $search_length = strlen($search);
    
    if (!empty($text) && !empty($search) && !empty($replace)) {
        while ($strpos = strpos($text, $search, $offset)) {
            $offset = $strpos + $search_length;
            $text = substr_replace($text, $replace, $strpos, $search_length);
        }
        
        echo $text;
        
    }else{
        echo 'Please fill in all fields.';
    }
    
}

?>


<form action="index.php" method="POST">
    <textarea name="text" rows="8" cols="30"></textarea> <br><br>
    Search For: <br>
    <input type="text" name="searchfor"/> <br><br>
    Replace With: <br>
    <input type="text" name="replacewith"/><br><br>
    <input type="submit" value="Submit"/>
</form>