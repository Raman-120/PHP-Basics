<?php
// Matches in Switch
// modern php uses advancce switches that throws out the traditional code layout
// Unlike switch, match uses strict comparison (===) which is identical.
// It is more like a modern, shorter version of switch.

// basic match demonstration

// $day = "Thursday";

// $message = match($day){
//     "Monday" => "Start of the week",
//     "Tuesday" => "Second day of the week",
//     "Saturday" => "Weekend of the week",
//     "Sunday" => "Weekend of the week",
//     default => "Might not be a day",
// };

// echo $message; //  prints Might not be a day

// $fruit = "mangoo";

// $Fruits = match($fruit){
//     "apple", "banana", "mango" => "Is a fruit",
//     default => "not a fruit",
// };

// echo $Fruits;

$num = "0";
$type = match($num){
    0 => "Integer Zero",
    "0" => "String zero",
};

echo $type;


?>