<?php
//variable fuction 

function hello($name){
    echo "hello $name";
}

$func="hello";
$func("Radhe krishna");

echo '<br>';
//anonymous fuction 

$sayhello = function($name){
    echo "hello $name";
};

$sayhello("Radhe krishna");

