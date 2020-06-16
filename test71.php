<?php

$str = "Hello World";

$strencode=convert_uuencode($str);
echo $strencode;

echo "<br><br>";

$strdecode=convert_uudecode($strencode);
echo $strdecode;