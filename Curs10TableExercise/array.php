<?php

function printArray($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

//$names = array();
$names = [];
var_dump($names);

$names = ["Ana"];
var_dump($names);

$names = ["Ana", "Paul"];
var_dump($names);

// Add new value to existing array
$names[] = "Maria";
printArray($names);

$names[1] = "Mihai";
printArray($names);

unset($names[1]);
printArray($names);

$names[] = "Vio";
printArray($names);

$names[1] = "Mihai";
printArray($names);


$search = "Vio";

for ($i = 0; $i < count($names); $i++) {
    //echo $names[$i];
    if ($names[$i] === $search) {
        echo "SUCCESS " . $search . " WAS FOUND!";
    }
}

// [0][0] name
// [0][1] age
// [0][2] job

// [1][0] name
// [1][1] age
// [1][2] job

// $person = [0 => "Ana", 1 => "Mihai", 2 = > "Vio"];

$person = ["name" => "Ana", "age" => 10, "job" => "elev"];
echo $person["age"];
printArray($person);

foreach($person as $value) {
    echo $value;
}

foreach($person as $key => $value) {
    echo "Key = " . $key . " value = " . $value . " <br>";
}

$person1 = ["name" => "Ana", "age" => 10, "job" => "elev"];
$person2 = ["name" => "Mihai", "age" => 20, "job" => "trainer"];
$person3 = ["name" => "Vio", "age" => 20, "job" => "trainer"];

$persons = [$person1, $person2, $person3];
printArray($persons);

$persons[0]["name"] = array("fname" => "Ana", "lname" => "POP");
printArray($persons);
echo $persons[0]["name"]["lname"];