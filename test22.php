<?php

function percent($s1, $s2, $s3){
    $total=$s1+$s2+$s3;
    $avg=$total/3;

    return $avg;
}

$marathi=90;
$hindi=95;
$english=100;

echo 'Percent is : ' . percent($marathi,$hindi,$english);

?>