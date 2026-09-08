<?php

// arrays in php
// arrays are of 3 types in php 
// They are: 1) Indexed Arrays => uses index number to access elements
//           2) Assoiciative Arrays => Uses string keys instead of numbers
//           3) Multi-Dimensional Arrays


// code demonstration of indexed arrays in php

// We can create arrays with 2 ways, they are: 
// $array = array("Xiaomi", "Poco", "Honor", 55000); // first way

$array = ["Xiaomi", "Poco", "Honor", 55000]; // second way, you can use any method as you like

// for accessing elements we can use indexing here, and the indexing is always start from  0 in php

// echo $array[0];
// echo $array[2];

// we can use the following to print all elements at once
// print_r($array);


// Asssoiciative arrays in php

$info = [
    "name" => "XYG",
    "age" => 20,
    "course" => "BIT"
];

// echo $info["name"]; // here, name , age and course are string keys, and program access the data from the srtring key
// //                      rather than any index number.
// print_r($info);

//another way to print the result is using for each loop,

foreach ($info as $information){
    echo $information . "<br>";
}

foreach($array as $arr){
    echo $arr . "<br>";
}


?>