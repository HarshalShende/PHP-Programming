<?php

$colnum=array("red",10,"orange",10.10,"green");

echo $colnum[0]."<br>";
echo $colnum[1]."<br>";
echo $colnum[2]."<br>";
echo $colnum[3]."<br>";

echo "<br>";

$approach2=["red",10,"orange",10.10,"green"];

echo $approach2[0]."<br>";
echo $approach2[1]."<br>";
echo $approach2[2]."<br>";
echo $approach2[3]."<br>";
echo "<br>";
// print array
echo "<pre>";
print_r($approach2);
echo "</pre>";

echo "<br>";

$color=["red","gold","orange","silver","green"];

echo "<ul>";
for($i=0;$i<3;$i++){
    echo "<li> $color[$i] </li>";
}
echo "</ul>";

