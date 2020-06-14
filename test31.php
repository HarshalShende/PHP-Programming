<?php

$marks=[
    "krishna"=>[
        "physics"=>85,
        "maths"=>78,
        "chemistry"=>89
    ],
    "Ram"=>[
        "physics"=>65,
        "maths"=>99,
        "chemistry"=>45
    ],
    "shiva"=>[
        "physics"=>25,
        "maths"=>56,
        "chemistry"=>95
    ]
];

foreach($marks as $key => $v1){
    echo $key ."=>".var_dump($v1) ."<br>";
}
echo "<br>";
foreach($marks as $key => $v1){
    echo "<h3>".$key . "</h3><br>";
    foreach($v1 as $key2 => $v2){
        echo $key2 ." = ".$v2."<br>";
    }
    echo "<br>";

}
echo "<br>";
echo "<table border='2px' cellpadding='2px' cellspacing='0'";
foreach($marks as $key => $v1){
    echo "<tr>";
        echo "<td>".$key."</td>";
        foreach($v1 as $v2){
            echo "<td>".$v2."</td>";
        }  
    echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "<pre>";
print_r($marks);
echo "</pre>";