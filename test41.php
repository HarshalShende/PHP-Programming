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
$a3=array(
    "a"=>"red",
    "b"=>"black",
    "h"=>"yellow"
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

$newarr1=array_diff($a1,$a2);
$newarr2=array_diff($a1,$a2,$a3);
$newarr3=array_diff_key($a1,$a2);
$newarr4=array_diff_assoc($a1,$a2);
$newarr5=array_diff_uassoc($a1,$a2,"compare");
$newarr6=array_udiff_assoc($a1,$a2,"compare");
$newarr7=array_diff_ukey($a1,$a2,"compare");
$newarr8=array_udiff($a1,$a2,"compare");
$newarr9=array_udiff_uassoc($a1,$a2,"compare","compareValue");


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