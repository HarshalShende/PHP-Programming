<?php

$arr=[
    "steve"=>10,
    "bill"=>"hey ram",
    "elon"=>12.23
];

$arr2=
    array(
        "red",
        10,
        "orange",
        10.10,
        "green"
    );

foreach($arr as $value){
    echo $value."<br>";
}
echo "<br>";
foreach($arr as $key => $value){
    echo "$key = $value <br>";
}

echo "<br>";
foreach($arr2 as $value){
    echo $value."<br>";
}