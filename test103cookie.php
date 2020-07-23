
<?php
if(!isset($_COOKIE['user'])){
    echo "Cookie is not set";
}else{
    echo $_COOKIE['user'];
}

setcookie("user","",time()-(86400*30),"/");
?>