<?php

$age=22;

if($age > 18 && $age < 25){
    echo 'you are eligible ';
}
echo '<br>';

if($age > 18 and $age < 25){
    echo 'you are eligible';
}
echo '<br>';

if($age > 18 || $age < 25){
    echo 'you are not eligible';
}
echo '<br>';

if($age > 18 or $age < 25){
    echo 'you are not eligible';
}
echo '<br>';

$age=68;
if($age > 18 xor $age < 25){
    echo 'you are eligible';
}else{
    echo 'wrong';
}
echo '<br>';

?>