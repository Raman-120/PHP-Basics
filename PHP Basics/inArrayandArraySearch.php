<?php

// in_array() returns in boolean, either true or false.
// array_search() returns key/ index of the value
//syntax 
// in_array(needle, haystack); needle = the value we are searching
//                             haystack = The array
// array_search(needle, haystack, strict);

// $array = ["java", "C++", "C#", "C", "Python", "Rust", "GO"];
// // echo "<pre>";
// // print_r($array);
// echo in_array("java", $array); // returns 1 if the value exists and 0 if it doesn't exists

$numbers = [1,"2",3,4,5,6];

// echo in_array(2, $array); // It returns true despite one is integer and another in string
// we can use strict here to ensure not to return true for this kind of case

echo in_array("2", $numbers, true) . "<br>"; // here it return true only if the value we provided exists
// is in the array with the same data type 



// array_search() in php

$info = ["name" => "Dell", "price" => 25000, "cable" => "HDMI"];

echo array_search("25000", $info); // returns key
echo array_search(25000, $info, true); // returns the key if the datatype we provided is same 
//                                        as the datatype exists in the haystack(array) 


echo array_search(4,$numbers); // returns index

?>