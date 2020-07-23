<?php

 echo "<br><br>";
 echo '<pre>';
 date_default_timezone_set("Asia/Kolkata");

$date = date_create("2023-03-15");
echo date_format($date, "l") . "<br>";
echo date_format($date, "d/m/Y H:i:s") . "<br>";

$date = date_create("2023-03-15");
echo date_format($date, "d/m/Y H:i:s") . "<br>";


$date = date_create("2023-03-15", timezone_open("Asia/Karachi"));
echo date_format($date, "d/m/Y H:i:s") . "<br>";

 echo "<br><br>";

 echo '</pre>';
 echo "<br><br>";