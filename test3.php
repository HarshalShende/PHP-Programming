<?php

$a='harshal';
$b='a';
$c=10;
$d=10.10;
$e=1020.2002;
$f=true;
$g=array("apple","ball","cat","dog");

var_dump($a);
echo '<br>';

var_dump($b);
echo '<br>';

var_dump($c);
echo '<br>';

var_dump($d);
echo '<br>';

var_dump($e);
echo '<br>';

var_dump($f);
echo '<br>';

var_dump($g);
echo '<br>';

foreach($g as $h){
    echo $h;
    echo '<br>';
}
?>