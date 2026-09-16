<?php

    // there are 2 types of variable i.e. local and global

        $val = 15; // global variable
        $num = 11;
    function message(){
        // $num = 5; // local variable
        // but if we use the global keyword then it becomes the global variable
        global $num,$val;
        echo "This is a message block variable " . $num + $val . "<br>";
    }

    echo message();
    // echo $num; // will throw error because num variable is a local variable
    echo $val . "<br>";
    echo $num;
?>