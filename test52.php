<?php

$a=[1,2,3,4,5];
$b=['lemon', 'orange', 'wood apple','banana', 'mango'];
$c=['a'=>'lemon', 'b'=>'orange', 'c'=>'wood apple','d'=>'banana', 'e'=>'mango'];
$d=array("img12.png","img10.png","img2.png","img1.png");
$food=['lemon', 'orange', 'apple','grapes'];
$vegie=['aloo', 'kanda', 'gobhi'];

// $newarr2=array_reduce($b,'myFunc',12);
// $newarr3=array_reduce($a,'myFunc',12);

echo '<pre>';
echo "<b>Current:</b>".current($food);echo '<br>';
echo "<b>Key:</b>".key($food);echo '<br>';
echo "<b>Pos:</b>".pos($food);echo '<br>';
next($food);
echo "<b>Current:</b>".current($food);echo '<br>';
next($food);
echo "<b>Current:</b>".current($food);echo '<br>';

prev($food);
echo "<b>Current:</b>".current($food);echo '<br>';

end($food);
echo "<b>Current:</b>".current($food);echo '<br>';
echo "<b>Key:</b>".key($food);echo '<br>';

print_r(each($food));
echo "<b>Current:</b>".current($food);echo '<br>';

reset($food);
echo "<b>Current:</b>".current($food);echo '<br>';

echo '</pre>'; 


