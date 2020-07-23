<?php

session_start();

if(isset($_SESSION["name"])){
    echo "Session Name is: ".$_SESSION["name"];
}

print_r($_SESSION);


