<?php

 $val=min(10,12,53,52,12,65);
 echo $val;

 echo "<br><br>";

 $val=max(10,12,53,52,12,65);
 echo $val;

 echo "<br><br>";

 $arr=array(10,12,53,52,12,65);
 echo min($arr);

 echo "<br><br>";

 $arr=min(array(2,4,8),array(2,5,1));
 echo '<pre>';
print_r($arr);
 echo '</pre>';

 echo "<br><br>";

 $arr=max(array(2,4,8),array(2,5,1));
 echo '<pre>';
print_r($arr);
 echo '</pre>';

 $val=min(TRUE,0);
 echo $val;

 echo "<br><br>";