<?php

$a1=array(
    "a"=>"red",
    "b"=>"green",
    "c"=>"blue",
    "d"=>"yellow"
);

$a2=array(
    "a"=>"red",
    "f"=>"green",
    "d"=>"purple"
);

function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a > $b)? 1: -1;
}
function compareValue($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a > $b)? 1: -1;
}


$newarr1=array_intersect($a1,$a2); //MAtch values
$newarr2=array_intersect_key($a1,$a2); //match keys
$newarr3=array_intersect_assoc($a1,$a2);  //match key and values
$newarr4=array_intersect_uassoc($a1,$a2,"compare");
$newarr5=array_intersect_uassoc($a1,$a2,"strcasecmp");
$newarr6=array_uintersect_assoc($a1,$a2,"compare");
$newarr7=array_intersect_ukey($a1,$a2,"compare");
$newarr8=array_uintersect($a1,$a2,"compare");
$newarr9=array_uintersect_uassoc($a1,$a2,"compare","compareValue");

echo '<pre>';
print_r($newarr1);echo '<br>';
print_r($newarr2);echo '<br>';
print_r($newarr3);echo '<br>';
print_r($newarr4);echo '<br>';
print_r($newarr5);echo '<br>';
print_r($newarr6);echo '<br>'; 
print_r($newarr7);echo '<br>'; 
print_r($newarr8);echo '<br>'; 
print_r($newarr9);echo '<br>'; 
echo '</pre>';
echo '<br>';echo '<br>';