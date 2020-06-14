<?php

$str="Gopal Krishna. Krishna vasudev yadav";


echo '<Pre>';

echo "<br>";
echo strlen($str);
echo "<br>";
echo str_word_count($str);
echo "<br>";
print_r(str_word_count($str,1));
echo "<br>";
print_r(str_word_count($str,2));
echo "<br>";
echo substr_count($str,"Krishna");
echo "<br>";
echo substr_count($str,"Krishna",14);
echo "<br>";
echo substr_count($str,"Krishna",14,25);
echo "<br>";

echo '</Pre>';
echo "<br>";echo "<br>";
