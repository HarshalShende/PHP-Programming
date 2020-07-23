<?php

date_default_timezone_set("Asia/Kolkata");

echo date_default_timezone_get();

echo "<br><br>";

$tz=timezone_open("Europe/Paris");
echo timezone_name_get($tz);

echo "<br><br>";


echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

echo "<br><br>";


echo "<pre>";
print_r(timezone_identifiers_list());
echo "</pre>";
echo "<br><br>";

echo "<pre>";
print_r(timezone_identifiers_list(1));
echo "</pre>";
echo "<br><br>";

echo "<pre>";
print_r(timezone_identifiers_list(2));
echo "</pre>";

/*

1 Africa
2 America
4 antarctica
8 arctic
16 asia
32 atlantic
64 australia
128 europe
256 indian
512 pacific
1024 utc
2047 all
4095 ALL_WITH_BC
4096 PER_country

*/