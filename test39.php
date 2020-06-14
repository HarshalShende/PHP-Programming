<?php

$food=array('orange','banana','greapes','apple');
$vegie=array('a'=>'coriender','b'=>'cocumber');

// $newarr=array_keys($vegie);
// $newarr=array_key_first($vegie);
// $newarr=array_key_last($vegie);
// $newarr=array_key_exists("a",$vegie);
$newarr=key_exists("a",$vegie);

echo '<pre>';
print_r($newarr);
echo '</pre>';
echo '<br>';echo '<br>';

if ($newarr) {
    echo "Key Exists";
} else {
    echo "Key Does Not Exist";
}
