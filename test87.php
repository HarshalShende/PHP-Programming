<?php


echo "<pre>";

echo(strtotime("now"));

echo "<br><br>";

echo(date("d-m-Y",strtotime("now")));
echo "<br><br>";

echo(date("d-m-Y",strtotime("6 april 1998")));
echo "<br><br>";

echo(date("d-m-Y H:m",strtotime("+5 hours")));
echo "<br><br>";

echo(date("d-m-Y H:m",strtotime("+1 week")));
echo "<br><br>";

echo(date("d-m-Y H:m",strtotime("+1 week 3 days 7 hours 5 minutes 10 seconds")));
echo "<br><br>";

echo(date("d-m-Y H:m",strtotime("next day")));
echo "<br><br>";

echo(date("d-m-Y H:m",strtotime("last sunday")));
echo "<br><br>";

echo(date("d-m-Y H:m",strtotime("first day of last month")));
echo "<br><br>";

echo strftime("%B %d %Y, %X %Z") . "<br><br>";

echo strftime("%B %d %Y, %X %Z", mktime(21,30,0,05,18,2005)) . "<br><br>";

echo strftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2005)) . "<br><br>";

echo gmstrftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2005)) . "<br><br>";

echo "</pre>";