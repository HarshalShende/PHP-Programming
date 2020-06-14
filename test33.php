<?php

$food=array('orange','banana','orange','banana','apple');

echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";

echo "<br>";

echo count($food);
echo "<br>";
echo sizeof($food);
echo "<br>";
echo "<br>"; 

$len=count($food);

for($i=0;$i<$len;$i++){
    echo $food[$i]."<br>";
}
echo "<br>";

$arr=array(
    'fruit'=>array('orange','banana','apple'),
    'vegies'=>array('carrot','collard','pea')
);

echo count($arr);
echo "<br>";
echo count($arr['fruit'],1);
echo "<br>";
echo count($arr,1);
echo "<br>";

echo sizeof($arr);
echo "<br>";