<?php

 echo "<br><br>";
 echo '<pre>';
 date_default_timezone_set("Asia/Kolkata");

 echo  "Time and Date " . date("d-m-Y h:i:sa") . "<br>";

 echo date("l", mktime(0,0,0,4,6,1998));

 echo date("d-m-Y", mktime(0,0,0,4,6,1998));

 echo date("d-m-Y h:i:sa", gmmktime(0,0,0,4,6,1998));

 echo "<br><br>";

 echo '</pre>';
 echo "<br><br>";