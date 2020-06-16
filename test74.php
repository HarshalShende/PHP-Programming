<?php

$str1="Hello <b>World</b>, Hello <i>Earth</i>";
$str2="This World Is Beautiful";

echo strip_tags($str1);
echo "<br><br>";

echo strip_tags($str1,"<b>");
echo "<br><br>";

echo wordwrap($str2,4,"<br>");
echo "<br><br>";

echo wordwrap($str2,4,"<br>",TRUE);
echo "<br><br>";