<?php

echo 'Hell0 dear 1 <br>';

for($b=1; $b<=10; $b++){
    if($b==3 ){
        goto abc; 
    }
    echo $b;
    echo '<br>';
}

echo 'Hell0 dear 2 <br>';
echo 'Hell0 dear 3 <br>';
goto abc;
echo 'Hell0 dear 4 <br>';
echo 'Hell0 dear 5 <br>';
abc:
echo 'Hell0 dear 6 <br>';
echo 'Hell0 dear 7 <br>';

echo '<br>';