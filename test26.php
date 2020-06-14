<?php

$x=10;

function test1(){
    global $x;
    echo "Inside function test1 ".$x;
}

function test2(){
    echo "Inside function test2 ".$x;
}

test1();
test2();

?>