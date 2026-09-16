<?php
    
    $con = mysqli_connect("localhost", "root","","PHP database");

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $sql = "INSERT INTO register (username,password) VALUES ('$user', '$pass')";
    $check = mysqli_query($con,$sql);

    if($check){
        echo "Data inserted successfully.";
    }
    else{
        echo "Unable to insert data";
    }

?>

