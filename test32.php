<?php

$emp = [
    [1,"krishna","sudarshan",789456],
    [2,"ram","dhanushya",456987],
    [3,"shiv","trishul",852369],
    [4,"vishnu","palanhar",147852]
];


$marks=[
    [
        "id"=>1,
        "name"=>"brahma",
        "designation"=>"creator",
        "salary" => 123456789
    ],
    [
        "id"=>2,
        "name"=>"vishnu",
        "designation"=>"manager",
        "salary" => 789456123
    ],
    [
        "id"=>3,
        "name"=>"shiva",
        "designation"=>"destroyer",
        "salary" => 987456321
    ]
];

foreach($emp as list($id,$name,$weopen,$salary)){
    echo "$id, $name, $weopen, $salary <br>";
}
echo "<br>";
foreach($marks as list("id"=>$id,"name"=>$name,"designation"=>$weopen,"salary"=>$salary)){
    echo "$id, $name, $weopen, $salary <br>";
}

