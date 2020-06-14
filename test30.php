<?php

$emp = [
    [1,"krishna","sudarshan",789456],
    [2,"ram","dhanushya",456987],
    [3,"shiv","trishul",852369],
    [4,"vishnu","palanhar",147852]
];

for($row=0;$row<4;$row++){
    for($col=0;$col<4;$col++){
        echo $emp[$row][$col]." ";
    }
    echo "<br>";
}
echo "<br>";

foreach($emp as $v1){
    foreach($v1 as $v2){
        echo $v2 . " ";
    }
    echo "<br>";
}
echo "<br>";

echo "<table border='2px' cellpadding='5px' cellspacing='0px'> ";

foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
echo "</table>";


echo "<pre>";
print_r($emp);
echo "</pre>";