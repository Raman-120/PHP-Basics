<?php
// array push and pop in php
$array = [];
// echo "<pre>";
// array_push($array, 7,8); // inserts data into the array 

// array_pop($array); // removes the last value of the array

// we can also push string to our array

array_push($array, "Mouse", "keyboard");

// $length = count($array); // use count keyword to get the array size
// echo $length;


// let's push array through loop

for($i = 0; $i < 15; $i++){
    echo "<pre>";
    array_push($array, $i);
}

array_pop($array);
print_r($array);
?>