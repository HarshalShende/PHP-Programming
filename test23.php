<?php

function testing(&$str){
    $str .= " jai Shri radhe";
}

$string="Jai Shri Krishna ";
testing($string);
echo $string;

echo '<br>';

function first($num){
    $num+=5;
}
function second(&$num){
    $num+=7;
}

$number=10;
first($number);
echo "Original value is $number <br>";

second($number);
echo "Original value is $number <br>";
?>