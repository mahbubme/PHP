<form action="index.php" method="GET">
    
    <select name="uh">
       <option value="h">Healthy</option> 
       <option value="u">Unhealthy</option> 
    </select> <br><br>
    <input type="submit" value="Submit"/>
</form>

<?php

// Select and query database.
require('connect.inc.php');

if (isset($_GET['uh']) && !empty($_GET['uh'])) {
    $uh = strtolower($_GET['uh']);
    
    if ($uh==h || $uh==u) {
        $query = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy`='$uh' ORDER BY `id` ASC";
        
        if ($query_run = mysql_query($query)) {
            if (mysql_num_rows($query_run)==NULL) {
                echo 'No results found.';
            }else {
                while ($query_row = mysql_fetch_assoc($query_run)) {
                    $food = $query_row['food'];
                    $calories = $query_row['calories'];
                    
                    echo $food.' has '.$calories.'<br>';
                }    
            }
        }else {
            echo mysql_error();
        }    
    }
}

?>

