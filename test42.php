<?php
$a1=array(
    "a"=>"red",
    "b"=>"green",
    "c"=>"red",
    "d"=>"yellow"
);


$newarr1=array_values($a1);
$newarr2=array_unique($a1);

echo '<pre>';
print_r($newarr1);echo '<br>';
print_r($newarr2);echo '<br>';
echo '</pre>';
echo '<br>';echo '<br>';