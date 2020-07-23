<?php

 echo "<br><br>";
 echo '<pre>';
 
print_r(getdate());
echo "<br><br>";

$date=getdate();
echo $date['month'] . " - " . $date['year'];
echo "<br><br>";

$olddate=mktime(0,0,0,03,15,2015);
$date=getdate($olddate);
echo $date['month'] . " - " . $date['year'];
echo "<br><br>";

print_r(getdate($olddate));
echo "<br><br>";

print_r(gettimeofday());
echo "<br><br>";

$date=gettimeofday();
echo $date['sec'];
echo "<br><br>";

echo gettimeofday(true);

print_r(localtime());
echo "<br><br>";

print_r(localtime(time(),true));
echo "<br><br>";

$olddate=mktime(0,0,0,03,15,2015);

print_r(localtime($olddate,true));
echo "<br><br>";

 echo '</pre>';
 echo "<br><br>";