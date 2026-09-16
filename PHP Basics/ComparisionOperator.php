<?php
// comparision operator in php

$num1 = "10";
$num2 = "15";

var_dump($num1 == $num2)."<br>";
var_dump($num1 === $num2) ."<br>"; // returns true when both value are equal and datatype is same
var_dump($num1 <> $num2) . "<br>"; // it is a not equal sign can be written as both != and <>
var_dump($num1 < $num2);
var_dump($num1 > $num2);
var_dump($num1 <= $num2);
var_dump($num1 >= $num2);

echo $num1 <=> $num2 . "<br>"; // <=>, it is a spaceship operator
//returns -1,0,1 when the left value is small, equal or greater than right value

var_dump($num1 !== $num2); // returns true cause the value isn't same
                          // even if the datatype is same

?>