<?php

$a="jai ram. shri krishna. hre gopala";
$b=array('helo','world','hare','krishna');

$newarr=explode(" ",$a);
$newarr2=explode(".",$a);
$newarr3=explode(" ",$a, 3);

$str= implode(" ",$b);
$str2= implode(" hari ",$b);
$str3= implode("<br>",$b);

echo '<Pre>';
print_r($newarr);
print_r($newarr2);
print_r($newarr3);
echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo $str3;

echo '</Pre>';
echo "<br>";echo "<br>";
