<?php 

// Reading a file
if (isset($_POST['name'])) {
   $name = $_POST['name'];
   
   if (!empty($name)) {
       
       $handle = fopen('form-names.txt', 'a');
       fwrite($handle, $name."\n");
       fclose($handle);
       
       echo 'Current names in file: ';
       
       $count = 1;
       $readin = file('form-names.txt');
       $readin_count = count($readin);
       
       foreach ($readin as $fname) {
           echo trim($fname);
           
           if ($count<$readin_count) {
               echo ', ';
           }
           $count++;
       }
   }else {
       echo 'Please type a name';
   }
}

?>

<form action="index.php" method="POST">
    Name :<br><input type="text" name="name"/><br><br>
    <input type="submit" value="Submit"/>
</form>