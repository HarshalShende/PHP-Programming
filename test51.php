<?php

$a=[1,2,3,4,5];
$b=['lemon', 'orange', 'wood apple','banana', 'mango'];
$c=['a'=>'lemon', 'b'=>'orange', 'c'=>'wood apple','d'=>'banana', 'e'=>'mango'];
$d=array("img12.png","img10.png","img2.png","img1.png");
$food=['lemon', 'orange', 'apple'];
$vegie=['aloo', 'kanda', 'gobhi'];

$revarr=array_reverse($b);
sort($b);
rsort($a);
// asort($c);
//arsort($c);
//ksort($c);
// krsort($c);
// natsort($d);
natcasesort($d);
array_multisort($food,$vegie);

// $newarr2=array_reduce($b,'myFunc',12);
// $newarr3=array_reduce($a,'myFunc',12);

echo '<pre>';
print_r($b);echo '<br>';
print_r($a);echo '<br>';
print_r($c);echo '<br>';
print_r($d);echo '<br>';
print_r($food);echo '<br>';
print_r($vegie);echo '<br>';
print_r($revarr);echo '<br>';

echo '</pre>'; 


