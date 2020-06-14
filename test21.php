<?php

function myname($fname='Agent ',$lname='black'){
    echo "Your name is $fname $lname <br>";
}

function sum($a,$b){
    return $a+$b;
}

myname();
myname('Hare','krishna');

echo "Sum is ".sum(25,75);

?>