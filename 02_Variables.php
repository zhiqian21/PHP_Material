<?php

    #boolean
    $logged_in = true;      //default = false

    #integer
    $num = 2940;

    #floating point number
    $speed = 104.87;

    #String - use " " or ' '
    $name = "John";

    echo "My name is $name !";

    $x = "num";
    $$x = "num2";
    echo $x . "<br>";
    echo $$x . "<br>";
    echo "the total of $num" . $$x;

?>