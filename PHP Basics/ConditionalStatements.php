<?php 
// conditional statements in php

$age = 18;

if($age >= 18){
    echo "You are eligible to vote.";
}

else if($age <= 0){
    echo "You are not born yet.";
}

else if($age < 18){
    echo("You are not eligible to vote.");
}

else{
    echo "Hello grandpa.";
}

?>