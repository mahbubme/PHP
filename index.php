<?php 

// String functions
$string = 'This is an example string & this a tutorial .';
$string_word_count = str_word_count($string, 1, '&.');

print_r ($string_word_count);

// String shuffle
$words = 'abcdefghijklmnop0123456789';
$string_shuffled = str_shuffle($words);

$half = substr($string_shuffled, 0, strlen($words) / 2);
echo '<br>'.$half;

// String similarity
$string_one = 'This is my essay. I\'m goint to be talking about php.';
$string_two = 'My essay is about cats. I\'ll be talking about cats and their colors.';

similar_text($string_one, $string_two, $result);
echo '<br>The similarity between is '.$result;

// String length
$string = 'This is an example string.';
$string_length = strlen($string);

echo '<br>'.$string_length;

// String trim
$string = ' <br>This is an example string<br> ';
$string_trimmed = trim($string);

echo $string_trimmed;

// Add slashes $ strip slashes
$string = 'This is a <img src="image.jpg"> string.';
$string_slashes = htmlentities(addslashes($string));

echo stripslashes($string_slashes);

// Upper and lower case conversion
$string = 'I Could Be Any Case.';
$string_lower = strtolower($string);
$string_upper = strtoupper($string);

echo '<br>'.$string_lower;
echo '<br>'.$string_upper;

// Upper and lower case conversion in form data

if (isset($_GET['user_name']) && !empty($_GET['user_name'])) {
    $user_name = $_GET['user_name'];
    $user_name_lc = strtolower($user_name);
    
    if ($user_name_lc=='alex') {
        echo '<br>You are the best, '.$user_name;
    }
}

?>

<form action="index.php" method="GET">
    Name <input type="text" name="user_name"><br><br>
    <input type="submit" value="Submit">
</form>