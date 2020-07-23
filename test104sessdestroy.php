<?php

session_start();

session_unset();

session_destroy();

echo "session is destroyed"."<br>";

print_r($_SESSION);