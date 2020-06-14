<?php

$a=10;
$b=20;
$c="10";

if($a < $b)
{
    echo "A is smaller <   <br><br>";
}

if($a > $b)
{
    echo "A is biggest >  <br><br>";
}

if($a == $c)
{
    echo "A is smaller ==  <br><br>";
}

if($a === $c)
{
    echo "A is smaller ===  <br><br>";
}

if ($b >= $a):
    echo "B is greater than or equal to A  <br><br>";
endif;
?>