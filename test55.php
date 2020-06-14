<?php

$newarr=range(1, 10,2);
$newarr2=range('A', 'H');
$newarr3=range('h','a');

echo '<Pre>';
print_r($newarr);
print_r($newarr2);
print_r($newarr3);
echo '</Pre>';
echo "<br>";echo "<br>";
foreach(range('h','a') as $letter){
    echo $letter . "<br>";
}