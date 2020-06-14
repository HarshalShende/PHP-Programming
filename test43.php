<?php

$marks=array(
    array(
        "physics"=>85,
        "maths"=>78,
        "chemistry"=>89
    ),
    array(
        "physics"=>65,
        "maths"=>99,
        "chemistry"=>45
    ),
    array(
        "physics"=>25,
        "maths"=>56,
        "chemistry"=>95
    )
);

$newarr1=array_column($marks,'physics');
$newarr2=array_column($marks,'physics','maths');

echo '<pre>';
print_r($newarr1);echo '<br>';
print_r($newarr2);echo '<br>';
echo '</pre>';
echo '<br>';echo '<br>';

$cars=["volvo","toyota","TVS","SUV","Honda"];

$newarr3=array_chunk($cars,3);

echo '<pre>';
print_r($newarr3);echo '<br>';

echo '</pre>';
echo '<br>';echo '<br>';


$car=[
    "volvo"=>"35",
    "toyota"=>52,
    "TVS"=>56,
    "SUV"=>54,
    "Honda"=>98
];

$newarr4=array_chunk($car,3);
$newarr5=array_chunk($car,3,true);


echo '<pre>';
print_r($newarr4);echo '<br>';
print_r($newarr5);echo '<br>';
echo '</pre>';
echo '<br>';echo '<br>';
