<?php

$str="Hello";

echo "The String is : " . $str . "<br><br>";

echo "md5 Binary : " . md5($str,TRUE) . "<br><br>";

echo "md5 HEX : " . md5($str,FALSE) . "<br><br>";

echo "sha1 Binary : " . sha1($str,TRUE) . "<br><br>";

echo "sha1 HEX : " . sha1($str,FALSE) . "<br><br>";

if(md5($str)=="8b1a9953c4611296a827abf8c47804d7"){
    echo "Password Matched";
}
else{
    echo "Password Is Wrong";
}