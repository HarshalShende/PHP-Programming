<?php

$food=array('orange','banana','greapes','apple');
$fruit=array('peru','amba');

$newarray=array_replace($food,$fruit);

echo '<pre>';
print_r($newarray);
echo '</pre>';

echo '<br>';

$a=array('orange','banana','greapes','apple');
$b=array('a'=>'peru','b'=>'amba','3'=>'kela');

$c=array_replace($a,$b);

echo '<pre>';
print_r($c);
echo '</pre>';
echo '<br>';echo '<br>';

$array1=array("a"=>array("red"),"b"=>array("green","pink"));
$array2=array("a"=>array("yellow"),"b"=>array("black"));

$newarray2=array_replace_recursive($array1,$array2);

echo '<pre>';
print_r($newarray2);
echo '</pre>';