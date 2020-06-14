<?php
function myFunc($n,$m){
    return $n . "-" . $m;
}

$a=[1,2,3,4,5];
$b=['lemon', 'orange', 'wood apple','banana', 'mango'];
$c=['one'=>'lemon', 'two'=>'orange', 'three'=>'wood apple','four'=>'banana', 'five'=>'mango'];

$newarr=array_reduce($b,'myFunc');
$newarr2=array_reduce($b,'myFunc',12);
$newarr3=array_reduce($a,'myFunc',12);

echo '<pre>';
print_r($newarr);echo '<br>';
print_r($newarr2);echo '<br>';
print_r($newarr3);echo '<br>';

echo '</pre>';