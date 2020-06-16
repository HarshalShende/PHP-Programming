<?php

$str="Hello world. The world is nice!";

echo '<Pre>';

echo "<br>";
echo strstr($str,"world");
echo "<br>";echo "<br>";

echo "<br>";
echo strstr($str,"world",true);
echo "<br>";echo "<br>";

echo "<br>";
echo strstr($str,"World");
echo "<br>";echo "<br>";

echo "<br>";
echo stristr($str,"world");
echo "<br>";echo "<br>";

echo "<br>";
echo stristr($str,"WORLD");
echo "<br>";echo "<br>";

echo "<br>";
echo strchr($str,"world");
echo "<br>";echo "<br>";

echo "<br>";
echo strrchr($str,"world");
echo "<br>";echo "<br>";

echo "<br>";
echo strpbrk($str,"eo");
echo "<br>";echo "<br>";

echo "<br>";
echo strpbrk($str,"wo");
echo "<br>";echo "<br>";


echo '</Pre>';
echo "<br>";echo "<br>";
