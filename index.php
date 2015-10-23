<?php 

// $_GET variables
if (isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
    $day = htmlentities($_GET['day']);
    $date = htmlentities($_GET['date']);
    $year = htmlentities($_GET['year']);
    
    if (!empty($day) && !empty($date) && !empty($year)) {
        echo 'It is '.$day.' '.$date.' '.$year;
    }else {
        echo 'Fill in all fields.';
    }
    
}


?>

<!--Form method using GET-->
<form action="index.php" method="GET">
    Day <br> <input type="text" name="day"/> <br><br>
    Date <br> <input type="text" name="date"/> <br><br>
    Year <br> <input type="text" name="year"/> <br><br>
    <input type="submit" value="Submit"/>
</form>