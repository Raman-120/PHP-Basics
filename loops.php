<?php
// loops in php
// There are 4 types of loops in php i.e. for loop, while loop, do while loop and for each loop

// code demonstration of for loop in php

$i = 0;
for($i ; $i <= 5; $i++){
    echo $i ." ";
}


// code demonstration of while loop in php
$i = 0;

while($i <= 5){
    echo  $i . " ";
    $i++;
}

$i = 0;


// code demonstration of do while loop in php
do{
    echo $i . " ";
    $i++;

}while($i <= 5);


//code demonstration of for each loop in php
$names = ["amit", "rohan", "abhi"];
foreach($names as $name){
    echo $name . " ";
}

// we used an array in for each loop as it is best for running through an array or the collection

?>