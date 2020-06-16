<?php

$str = "Hello World";

$hex= bin2hex($str);
echo $hex;

echo "<br><br>";

echo hex2bin($hex);