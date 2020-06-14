<?php

$food=array('orange','banana','greapes','apple');
$vegie=array('coriender','cocumber');
$color=array('red','green');

$newarr=array_merge($food,$vegie,$color);

echo '<pre>';
print_r($newarr);
echo '</pre>';
echo '<br>';echo '<br>';

$a=array('a'=>'orange','b'=>'banana','c'=>'greapes','d'=>'apple');
$b=array('coriender','cocumber');
$c=array('b'=>'red','e'=>'green');

$d=array_merge($a,$b,$c);

echo '<pre>';
print_r($d);
echo '</pre>';
echo '<br>';echo '<br>';

$e=$a+$b+$c;

echo '<pre>';
print_r($e);
echo '</pre>';
echo '<br>';echo '<br>';

$f=array('a'=>'orange','b'=>'banana','c'=>'greapes','d'=>'apple');
$g=array('coriender','cocumber');
$h=array('b'=>'red','e'=>'green',55,68);

$i=array_merge_recursive($f,$g,$h);

echo '<pre>';
print_r($i);
echo '</pre>';
echo '<br>';echo '<br>';

$j=array('a'=>'orange','b'=>'banana','c'=>'greapes','d'=>'apple');
$k=array('coriender','cocumber');
$l=array('b'=>['color'=>['red','blue','green']],
        'e'=>'green',
        55,
        68);

$m=array_merge_recursive($j,$k,$l);

echo '<pre>';
print_r($m);
echo '</pre>';
echo '<br>';echo '<br>';

$name=array("ram","krishna","shiva");
$age=array(32,45,65);

$na=array_combine($name,$age);

echo '<pre>';
print_r($na);
echo '</pre>';
echo '<br>';echo '<br>';