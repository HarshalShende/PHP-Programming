<?php

define('var1',10);  //case sensitive by default 3rd parameter is false
define('var2',10,true); //case insensitive
define('var3',10,false);

echo var1;
echo '<br>';

echo VAR2;
echo '<br>';

echo vAr2;
echo '<br>';

echo var3;
echo '<br>';


?>