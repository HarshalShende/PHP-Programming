<?php

 for($a=1; $a<=10;$a++){
     if($a%2==0){
         echo $a;
         echo '<br>'; 
     }
     
 }echo '<br>';

 for($b=1; $b<=10; $b++){
    if($b==3 ){
        continue; 
    }
    echo $b;
    echo '<br>';
}
echo '<br>';

for($c=1; $c<=10; $c++){
    if($c==3 ){
        break; 
    }
    echo $c;
    echo '<br>';
}
echo '<br>';
?>