<?php

 echo "<br><br>";
 echo '<pre>';
 date_default_timezone_set("Asia/Kolkata");

echo checkdate(2, 15, 2014) . "<br>";
 echo "<br><br>";

 echo checkdate(2, 29, 2014) . "<br>";
 echo "<br><br>";

 echo checkdate(2, 29, 2004) . "<br>";
 echo "<br><br>";

 $date1=date_create("2013-03-15");
 $date2=date_create("2013-02-27");
 $diff=date_diff($date1,$date2);

echo $diff->days . "days";

echo $diff->format("%R%a days") . "<br>";
echo $diff->format("%r%a m days") . "<br>";
print_r($diff);

 echo '</pre>';
 echo "<br><br>";