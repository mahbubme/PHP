<?php 

// Reading a simple xml file.
$xml = simplexml_load_file('example.xml');

foreach ($xml->producer as $producer) {
    echo $producer->name.' is '.$producer->age.'<br>';
    foreach ($producer->show as $show) {
        echo $show->showname.' on '.$show->showdate.'<br>';
    }
}
    

?>