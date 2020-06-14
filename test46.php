<?php

$color=array("red","green","blue","yellow");
$color2=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

$newarr1=array_rand($color);
$newarr2=array_rand($color,2);
$newarr3=array_rand($color2,2);
shuffle($color);
shuffle($color2);

echo '<pre>';
print_r($newarr1);echo '<br>';
print_r($newarr2);echo '<br>';
print_r($newarr3);echo '<br>';
print_r($color);echo '<br>';
print_r($color2);echo '<br>';
echo '</pre>';


echo $color[$newarr2[0]].'<br>';
echo $color[$newarr2[1]].'<br>';

