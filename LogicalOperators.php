<?php
// logical operators in php
// &&, ||, !, xor

$num1 = 67;
$num2 = 66;

//AND logical operator (&&)
//if($num1 == 67 && $num2 == 66){ //returns true because both are same 
   // echo "equal";
//}


// OR logical operator (||)
//if($num1 == 66 || $num2 == 66){ // returns true as one of them is true
   // echo "true";
//}


// NOT EQUAL operator(!=)
//if($num1 != 66){ // returns num1 is not equal to 66 as num1 value is 67
  //  echo"num1 is not equal to 66";
//}

// XOR  operator (xor)
if($num1 == 67 xor $num2 == 45){ //returns xor operation
    echo "Xor operation";
}


?>