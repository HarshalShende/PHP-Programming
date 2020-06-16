<?php

$str="A 'quote' is <b>bold</b>"; //single quotes not converted
$str2='<a href="https://google.com">Google</a>';

echo $str . "<br><br>";
echo htmlentities($str);  
echo "<br><br>";

echo $str2 . "<br><br>"; 
echo htmlentities($str2);   
echo "<br><br>";

echo $str . "<br><br>";
echo htmlentities($str,ENT_QUOTES);  
echo "<br><br>";

echo $str . "<br><br>";
echo htmlentities($str,ENT_NOQUOTES);  
echo "<br><br>";

echo $str . "<br><br>";
echo htmlspecialchars($str,ENT_QUOTES);  
echo "<br><br>";

echo $str . "<br><br>";
echo htmlspecialchars($str,ENT_NOQUOTES);  
echo "<br><br>";

echo $str . "<br><br>";

$htmlent= htmlentities($str,ENT_NOQUOTES);  
echo $htmlent."<br><br>";
echo html_entity_decode($htmlent);

$htmlent= htmlspecialchars($str,ENT_QUOTES);  
echo $htmlent."<br><br>";
echo htmlspecialchars_decode($htmlent);

echo '<pre>';
print_r(get_html_translation_table(HTML_SPECIALCHARS));
echo "<br><br>";
print_r(get_html_translation_table(HTML_ENTITIES));

echo '</pre>';
echo "<br><br>";