<?php

 echo "<br><br>";
 echo '<pre>';
 
 $date1=date_create("2015-05-15");
 
date_add($date1,date_interval_create_from_date_string("30 days"));
echo date_format($date1, "d-m-Y");

echo "<br><br>";

date_sub($date1,date_interval_create_from_date_string("30 days"));
echo date_format($date1, "d-m-Y");

echo "<br><br>";

date_modify($date1,"10 days");
echo date_format($date1, "d-m-Y");

echo "<br><br>";

date_modify($date1,"-20 days");
echo date_format($date1, "d-m-Y");
 echo '</pre>';
 echo "<br><br>";