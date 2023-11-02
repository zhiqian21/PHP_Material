<?php

    $num1 = 90;
    $num2 = 200;

    if($num1 > $num2){
        $highest = $num1;
        $lowest = $num2;
    }
    else{
        $highest = $num2;
        $lowest = $num1;
    }
    echo "Highest value is " . $highest . "<br>";
    echo "Lowest value is " . $lowest . "<br>";

?>