<?php



 echo "<br><br>";
 echo '<pre>';

 echo  "Hour is " . date("h") . "<br>";
 echo  "Hour is " . date("H") . "<br>";
 echo  "Hour is " . date("g") . "<br>";
 echo  "Hour is " . date("G") . "<br>";

 echo  "Minute is " . date("i") . "<br>";
 echo  "Seconds is " . date("s") . "<br>";
 
 echo  "Meridiem is  " . date("a") . "<br>"; 
 echo  "Meridiem is  " . date("A") . "<br>";

 echo  "TIme is " . date("h:i:sa") . "<br>";
 echo  "TIme is " . date("h:i:sa e") . "<br>";
 echo  "TIme is " . date("d-m-Y h:i:sa") . "<br>";

 date_default_timezone_set("Asia/Kolkata");
 echo  "TIme is " . date("h:i:sa") . "<br>";
 echo  "TIme is " . date("h:i:sa e") . "<br>";

 echo "<br><br>";

 echo '</pre>';
 echo "<br><br>";