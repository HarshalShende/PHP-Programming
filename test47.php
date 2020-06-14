<?php

$a=array("a","b","c","d","e");

$newarr1=array_fill_keys($a, "Testing");
$newarr2=array_fill(3,6, "Testing");


echo '<pre>';
print_r($newarr1);echo '<br>';
print_r($newarr2);echo '<br>';

echo '</pre>';

