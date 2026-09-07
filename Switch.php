<?php
// Switch case in php

// basic demonstration of the switch case in php

// $day = "Sunday";

// switch ($day){
//     case "Monday":
//         echo "Work day";
//         break;
    
//     case "Tuesday":
//         echo "Work day";
//         break;
    
//     case "Sunday":
//         echo "Weekend.";
//         break;
//     default:
//         echo "Not a day.";    
// }


// Multiple cases sharing code

// $fruit = "mango";
// switch($fruit){
//     case "apple":
//     case "banana":
//     case "mango":
//         echo "This is a fruit.";
//         break;
//     default : 
//         echo "This isn't a fruit.";
// }


// we can also use switch cases without break keyword

$num = 2;
switch($num){
    case 1:
        echo "1"."<br>";
    case 2:
        echo "2"."<br>";
    case 3:
        echo "3";
        break;
} //executes case 2 and the rest of the following switch cases
// this is because case 2 falls through into case 3.

?>