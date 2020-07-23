<?php

 echo "<br><br>";
 echo '<pre>';
 
print_r(date_parse("2015-04-05 12:30:25.5"));
echo "<br><br>";

$date=date_parse("2015-04-05 12:30:25.5");
echo $date['day'];

echo "<br><br>";
print_r(date_parse_from_format("d.n.Y", "15.3.2015"));
echo "<br><br>";

 echo '</pre>';
 echo "<br><br>";