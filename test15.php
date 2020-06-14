<?php

$a=1;

while($a<=10){
    echo $a.'] Hello Brother';
    echo '<br>';
    $a++;
}
$a--;
echo '<br>';

echo '<ul>';
while($a>=1){
    echo '<li>'.$a.'] Hello Brother </li>';
    echo '<br>';
    $a--;
}
echo '</ul>';
