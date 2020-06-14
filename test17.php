<?php

for($a=1; $a<=10; $a++){
    echo $a.' <b>Hello buddy</b><br>';
}


echo '<br>';


for($a=1; $a<=100; $a=$a+10){
    for($b=$a; $b < $a + 10; $b++){
        echo $b.' ';
    }
    echo '<br>';
}

?>