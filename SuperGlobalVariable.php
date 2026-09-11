<?php

    // super gloabal variabel in php
    //In PHP, superglobals are special built-in variables that are always accessible
    //  in any scope (inside functions, classes, or globally) without needing the global 
    // keyword. They provide access to server data, user input, environment variables, and
    //  more.


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- This is a comment -->
    <!-- GET KEYWORD SYNTAX
     <form action = "fileName" method = "GET">
     <form action="value.php" method = "REQUEST"> 
        
     request can be used to get the data from the URL from both GET and POST-->
     

    <form action="value.php" method = "POST">
        username : <input type="text" name = "user"> <br>
        password : <input type="password" name = "pass"> <br>
        <input type = "submit" name="">
    </form>
</body>
</html>