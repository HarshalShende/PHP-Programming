<?php

$str="Hello world. The world is nice!";

echo '<Pre>';

echo "<br>";
echo str_pad($str,20,"++");
echo "<br>";echo "<br>";

echo "<br>";
echo str_pad($str,20,".",STR_PAD_LEFT);
echo "<br>";echo "<br>";

$str2="Hello";

echo "<br>";
echo str_repeat($str,5);
echo "<br>";echo "<br>";


echo '</Pre>';
echo "<br>";echo "<br>";
