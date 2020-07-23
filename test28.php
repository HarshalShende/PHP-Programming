
//associative array 

<?php

$arr=[
    "steve"=>10,
    "bill"=>"hey ram",
    "elon"=>12.23
];

echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";

$arr["elon"]="spacex";

echo "<pre>";
var_dump($arr);
echo "</pre>";
echo "<br>";

echo $arr["steve"] . "<br>";
echo $arr["bill"] . "<br>";
echo $arr["elon"] . "<br>";