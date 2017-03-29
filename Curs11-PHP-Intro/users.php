<?php

function printArray($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$persons = [
            ["name" => "Ana"/*["lname" => "POp", "fname"=>"Ana"]*/, "age" => 10, "job" => "elev"],
            ["name" => "Mihai", "age" => 20, "job" => "trainer"],
            ["name" => "Vio", "age" => 20, "job" => "trainer"]
            ];
printArray($persons);

foreach($persons as $value) {
    echo "Name = " . $value["name"] /*["fname"]  $value["name"]["lname"]*/ . " age = " . $value["age"] . " job = " . $value["job"] . "<br>";
}