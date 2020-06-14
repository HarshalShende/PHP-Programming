<?php

$b=array(
    "1"=>"carrot",
    "2"=>"Tomatoes"
);

$a=array(
    "a"=>"Lemon",
    "b"=>"Orange",
    "c"=>"Banana",
    "d"=>"Apple",
    "e"=>"Grapes"
);
$c=array(
    $b,
    "a"=>"Lemon",
    "b"=>"Orange",
    "c"=>"Banana",
    "d"=>"Apple",
    "e"=>"Grapes"
);

function myFunction($value, $key, $param){
    echo "$key $param $value <BR>";
}

$newarr1=array_walk($a, "myFunction","is a key of");
echo '<br>';
$newarr2=array_walk_recursive($c, "myFunction","is a key of");
echo '<br>';
echo '<pre>';
print_r($newarr1);echo '<br>';
print_r($newarr2);echo '<br>';

echo '</pre>';

