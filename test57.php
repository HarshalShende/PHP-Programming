<?php

$a="gopal krishna";

$newarr=str_split($a);
$newarr2=str_split($a,2);

$str=chunk_split($a, 3,"...");



echo '<Pre>';
print_r($newarr);
print_r($newarr2);

echo "<br>";
echo $str;
echo "<br>";

echo '</Pre>';
echo "<br>";echo "<br>";
