<?php

function square($n){
    return $n * $n;
}
function maparr($n, $m){
    return "$n = $m";
}
function assarr($n, $m){
    return [$n => $m];
}
function upparr($n){
    return strtoupper($n);
}

$a=[1,2,3,4,5];
$b=['lemon', 'orange', 'wood apple','banana', 'mango'];
$c=['one'=>'lemon', 'two'=>'orange', 'three'=>'wood apple','four'=>'banana', 'five'=>'mango'];

$newarr=array_map("square",$a);
$newarr2=array_map("maparr",$a,$b);
$newarr3=array_map("assarr",$a,$b);
$newarr4=array_map(null,$a,$b);
$newarr5=array_map('upparr',$c);
echo '<pre>';
print_r($newarr);echo '<br>';
print_r($newarr2);echo '<br>';
print_r($newarr3);echo '<br>';
print_r($newarr4);echo '<br>';
print_r($newarr5);echo '<br>';

echo '</pre>';