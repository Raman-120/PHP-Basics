<?php
// array merge and array combine in php

$array1 = ["Notebook", "Laptop", "Fan"];

$array2 = [1,2,3];

$array3 = ["a" => "Big Bad War", "b" => "Digital Logics"];

$array4 = [5,6,7];

echo "<pre>";
// print_r(array_merge($array1, $array2, $array3, $array4)); // merge all the arrays based on their keys
//                                                              and index value and prints them.


print_r(array_combine($array1, $array2)); // It uses first array values as a index to another array value
// Also it accepts only 2 arguments 

?>