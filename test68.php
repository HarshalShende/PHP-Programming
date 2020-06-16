<?php

$str="Hello I am 'Yahoo Baba'";


echo '<Pre>';
 
echo $str . "<br>";

echo "<br>";
$newstr1= addslashes($str);
echo $newstr1;
 
echo "<br>";

echo stripslashes($newstr1);
echo "<br>";echo "<br>";

echo "<br>";
$newstr2= addcslashes($str,"Ya");
echo $newstr2;
echo "<br>";

echo stripslashes($newstr2);
echo "<br>";echo "<br>";

echo "<br>";
$newstr3= addcslashes($str,"A..Z");//a..z a..f
echo $newstr3;
echo "<br>";echo "<br>";

echo stripslashes($newstr3);
echo "<br>";echo "<br>";


echo '</Pre>';
echo "<br>";echo "<br>";
