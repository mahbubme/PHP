<?php 

// Timestamps
$time = time();
$actual_time = date('D d M Y @ H:i:s', $time);

echo 'The current date/time is '.$actual_time.'<br>';

// Modifying timestamps
$time = time();
$time_now = date('D d M Y @ H:i:s', $time);
$previous_week = date('D d M Y @ H:i:s', strtotime('-1 week 2 hours 30 seconds'));
$nextWeek = date('D d M Y @ H:i:s', strtotime('+1 week'));

echo 'Now : '.$time_now.'<br> Previous week : '.$previous_week.'<br>Next week : '.$nextWeek;

?>