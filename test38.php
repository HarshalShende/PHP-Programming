<?php
// Array Slice 

$food=array('orange','banana','greapes','apple');
$vegie=array('a'=>'coriender','b'=>'cocumber');


//$newarr=array_slice($food,1,3);
//$newarr=array_slice($food,-2,2);
$newarr=array_slice($food,1,3,true);

echo '<pre>';
print_r($newarr);
echo '</pre>';
echo '<br>';echo '<br>';

$newarr2=array_slice($vegie,1,1,true);

echo '<pre>';
print_r($newarr2);
echo '</pre>';
echo '<br>';echo '<br>';

// Array Splice

$color=array('red','green','blue','violet','yellow');
$fruit=array('orange','banana','greapes','apple');

// array_splice($color,1,4);

array_splice($color,1,4,$fruit);

echo '<pre>';
print_r($color);
echo '</pre>';
echo '<br>';echo '<br>';
