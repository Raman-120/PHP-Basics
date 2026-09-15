<?php

    // $_SERVER super global variable in php

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";


    echo $_SERVER["HTTP_HOST"]; //get your host name

    echo $_SERVER["REMOTE_ADDR"]; // gives you the remote IP address of the user

    echo $_SERVER["PHP_SELF"]; // gives your current page URL
?>