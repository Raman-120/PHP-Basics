<?php
// Parameterized function or funtion with the argument in php

// code demonstration 

function sum($a, $b){ // here  $a and $b are the parameters
    echo "The resultant sum is: " . $a + $b . "<br>";
}

sum(10,20); // here 10 and 20 are the arguments


//suppose we have the subtraction function then, we might face some errors
// those errors are demonstrated via code

// function sub($a){
//     echo $a - $b . " is the difference";
// }

// sub(10,20); // this code block will likely through error as 2 arguments are passed but only one parameter
// is demanded 

// we can solve this like this
function sub($a,$b = null){
    echo $a - $b . " is the difference";
}

sub(10,20); // now even if the argument is provided for b variable or not, it will not throw any errors.

?>