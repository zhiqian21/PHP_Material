<?php

    function firstFunction(){
        echo "Hello world! <br>";
    }

    firstFunction();

    #parameterized function (input parameter)
    function secFunc($num1, $num2){
        echo $num1 + $num2;
    }

    secFunc(2,3);

    # return type
    function thirdFunc($num1, $num2) : int {
        return $num1 + $num2;
    }

    echo "<br>" . thirdFunc(4,7) . "<br>";

    #output parameter / reference
    function fourthFunc(&$num1){
        $num1+=4;
    }
    $num1 = 6;
    fourthFunc($num1);
    echo $num1;

?>