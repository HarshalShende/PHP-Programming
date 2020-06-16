<?php

$str="Hello world. The world is nice!";
$fruit=['lemon', 'orange', 'apple','banana', 'mango'];
echo '<Pre>';

echo "<br>";
echo str_replace("world","earth",$str);
echo "<br>";echo "<br>";

$find=["Hello","world"];
$find2=["Hello","WORLD"];
$replace=["Hi","earth"];

echo "<br>";
echo str_replace($find,$replace,$str);
echo "<br>";echo "<br>";

echo "<br>";
print_r(str_replace("orange","pink",$fruit));
echo "<br>";echo "<br>";

echo "<br>";
echo substr_replace($str,"earth",6);
echo "<br>";echo "<br>";

echo "<br>";
echo substr_replace($str,"earth",6,10);
echo "<br>";echo "<br>";

echo "<br>";
echo substr_replace($str,"earth",6,-5);
echo "<br>";echo "<br>";

echo "<br>";
echo substr_replace($str,"earth",0,0);
echo "<br>";echo "<br>";

echo "<br>";
echo strtr($str,"eo","ia");
echo "<br>";echo "<br>";

$arr=["Hello"=>"Hi","world"=>"earth"];

echo "<br>";
echo strtr($str,$arr);
echo "<br>";echo "<br>";

echo '</Pre>';
echo "<br>";echo "<br>";
