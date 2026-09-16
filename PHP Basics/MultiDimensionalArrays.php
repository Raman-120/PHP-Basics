<?php
// Multi-Dimensional Arrays in php

// Indexed multi dimensional array

// one way to create an array

// $myarray = array(
//             array("Ram", "Shyam", "geeta"),
//             array(5,10,15)
// );

// echo $myarray[1][1]; // to access any element via indexing

// foreach($myarray as $array){
//     foreach($array as $arr){
//         echo $arr . "<br>";
//     }
// }

// another way to create a multi dimensional array

// $numbers = [
//             [5,6,7],
//             [6,7,8]
// ];

// foreach($numbers as $number){
//     foreach($number as $num){
//         echo $num . " ";
//     }
// }




// asssoiciative multi dimensional arrays

// $myarray = array(
//             "info1" => array(
//                 "name" => "Sahil",
//                 "age" => "19",
//                 "course" => "BCA"
//             ),

//             "info2" => array(
//                 "name" => "Sam",
//                 "age" => "22",
//                 "course" => "BITM"
//             )
// );

 $myarray = [
       "info1" => ["name" => "Sahil", "age" => "19", "course" => "BCA"],
       "info2" => [ "name" => "Sam", "age" => "22", "course" => "BITM"]
 ];

echo $myarray["info2"]["age"]; // to access one elements

// foreach($myarray as $array){
//     foreach($array as $arr){
//         echo $arr . "<br>";
//     }
// }

?>