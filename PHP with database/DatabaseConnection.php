<?php
    // How to connect and ensure if the database is connected or not

    // One way to connect
    // $host = "localhost";
    // $user = "root";
    // $password = "";
    // $dbName = "PHP databae";

    // $con = mysqli_connect($host,$user,$password,$dbName);
    
    
    //Another way to connect
    $con = mysqli_connect("localhost", "root","", "PHP database");

    if($con){
        echo "Database connected.";
    }
    else{
        die("Connection failed."); // the die keyword will stop the program from here.
    }
?>