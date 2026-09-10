<?php

// sorting of arrays in php

$numbers = [5,9,2,6,7];

// sort($numbers); // sorts array in ascending order (for indexed arrays)

// rsort($numbers); // sorts array in descending order (for indexed arrays)

$age = ["John" => 25, "Abraham" => 26, "Gigi" => 67];

// asort($age); // sorts array in ascending order (for assoiciative array) according to the value

// arsort($age);// sorts array in descending order(for assoiciative array) according to the value

$array = ["name" => "Bajaj", "age"=> "25", "product" => "Pulsar series"];

ksort($array); // sorts array in ascending order (for assoiciative array) according to the keys
krsort($array);//  sorts array in descending order (for assoiciative array) according to the keys

foreach($array as $value){
    echo  $value ." ";
}


?>