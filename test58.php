<?php

$str="Gopal Krishna vasudev yadav";

$newstr=strtoupper($str);
$newstr2=strtolower($str);
$newstr3=lcfirst($str);
$newstr4=ucfirst($str);
$newstr5=ucwords($str);

echo '<Pre>';
print_r($newstr);echo "<br>";
print_r($newstr2);echo "<br>";
print_r($newstr3);echo "<br>";
print_r($newstr4);echo "<br>";
print_r($newstr5);echo "<br>";
echo "<br>";
echo $str;
echo "<br>";

echo '</Pre>';
echo "<br>";echo "<br>";
