<?php

$date=date_create("2014-05-15");

date_time_set($date, 13, 20);

echo date_format($date, "d-m-Y H:i:s");


date_time_set($date, 5, 20, 45);

echo date_format($date, "d-m-Y H:i:s");