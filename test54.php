<?php

$num=[1,2,3,4,5];
$fruit=['lemon', 'orange', 'wood apple','banana', 'mango'];
$a="orange";
$color=['a'=>'sef','b'=>'lemon', 'c'=>'orange', 'd'=>'wood apple'];



// extract($color);
// extract($color,EXTR_OVERWRITE);
// extract($color,EXTR_SKIP);
// extract($color,EXTR_PREFIX_SAME,"test");
extract($color,EXTR_PREFIX_ALL,"test");//prefix compulsory


echo '<pre>';
echo "value of a: $a <br>";
echo "value of a: $test_a <br>";//with prefix same
echo "value of b: $test_b <br>";
echo "value of c: $test_c <br>";

echo '</pre>'; 
echo "<br>";


$fname="Hari";
$lname="Krishna";
$age="22";
$gender="Male";
$country="india";

$extra=["gender","country"];
$newarr=compact("fname","lname","age",$extra);

echo '<Pre>';
print_r($newarr);
echo '</Pre>';


