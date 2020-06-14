<?php

$car=[
    "volvo"=>"35",
    "toyota"=>52,
    "TVS"=>56,
    "SUV"=>54,
    "Honda"=>98
];

$newarr1=array_flip($car);
$newarr2=array_change_key_case($car);
$newarr3=array_change_key_case($car,CASE_UPPER);
$newarr4=array_change_key_case($car,CASE_LOWER);

echo '<pre>';
print_r($newarr1);echo '<br>';
print_r($newarr2);echo '<br>';
print_r($newarr3);echo '<br>';
print_r($newarr4);echo '<br>';

echo '</pre>';
echo '<br>';echo '<br>';