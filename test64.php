<?php

$str="Hello world. The world is nice!";

echo '<Pre>';

echo "<br>";
echo strncmp("Hello world!", "Hello world",6 );
echo "<br>";echo "<br>";

echo "<br>";
echo strcasecmp("Hello world!", "hello World",6 );
echo "<br>";echo "<br>";

echo "<br>";
echo strncasecmp("HeLLo world!", "hello World! Hello",6 );
echo "<br>";echo "<br>";

echo "<br>";
echo substr_compare("hello world!", "world",6);
echo "<br>";echo "<br>";

echo "<br>";
echo similar_text("hello worlD!", "Hello yahooDaba",$per);
echo "Percentage: ".$per;
echo "<br>";echo "<br>"; 

echo '</Pre>';
echo "<br>";echo "<br>";
