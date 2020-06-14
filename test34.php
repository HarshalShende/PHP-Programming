<?php 

$food=array('orange','banana',55,'apple');

echo in_array('apple',$food);

echo "<br>";

if(in_array('apple',$food)){
    echo "Fruit Found";
}else{
    echo "Cant find";
}

echo "<br>";
// Strict search mode for same type vlue
if(in_array(55,$food,true)){
    echo " Found";
}else{
    echo "Cant find";
}

$a=array(array('p','h'),array('p','r'),'o');

echo "<br>";
// Strict search mode for same type vlue
if(in_array(array('p','h'),$a,true)){
    echo "Successfull";
}else{
    echo "Unsccessfull";
}
echo "<br>";

$foo=array('a'=>'orange','b'=>'banana','c'=>55,'d'=>'apple');
echo array_search('apple',$foo);
