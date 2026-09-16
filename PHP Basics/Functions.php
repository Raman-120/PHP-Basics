<?php

// functions in php
// Functions are the blocks of reusable code that can be used repeatedly in the program
// Generally, there are 2 types of function, 1) pre-defined 2) User- defined but there is
// another function too and i.e. anonymous function
// functions are also of parameterless and parameterized function. 

// Syntax 
// function functionName(){
//     //code to be executed;
// }

// It is recommmended to use camelCase for the functionName

// code demonstration of function in php
function message(){ // function is declared
    echo "This is a demonstration of the message function. <br>";
}


message();
message(); // fucntion is called.


function sum(){
    $a = 150;
    $b = 150;

    echo "The resultant sum is: " . $a + $b;
}

sum();
?>