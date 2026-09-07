<?php
// Increment and decrement operators in php

// post increment and decrement
// pre increment and decrement

$x = 5;

//post increment
echo $x++ . "<br>"; // returns x and then increment by 1
echo $x ."<br>"; // returns the incremented value i.e. 6

echo $x-- . "<br>"; // returns x and then decrement by 1
echo $x . "<br>"; // returns the decremented value i.e. 5


//pre increment

echo ++$x . "<br>"; //returns the incremented value i.e. 6
echo $x . "<br>"; // returns the value of x i.e 6

echo --$x . "<br>"; //returns the decremented value i.e. 5
echo $x . "<br>";// returns the value of x i.e 5


?>