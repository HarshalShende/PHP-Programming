<?php

function display($number){
    if($number <= 5){
        echo "$number <br>";
        display($number +1);
    }
}

display(1);

echo "<br>";

function factorial($num){
    $facto=1;
    if($num==0){
        return 1;
    }elseif($num==1){
        return 1;
    }else{
        while($num>=1){
        $facto=$facto*$num;
        $num--;
        }
    }
    return $facto;
}

echo factorial(10);

echo "<br>";

function factorial2($n){
    if($n==0){
        return 1;
    }else{
        return ($n * factorial2($n-1));
    }
}


echo factorial2(10);