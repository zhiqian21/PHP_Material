<?php

    $moustaches = array(
        array(
            'name' => "Handlebar",
            'creep_factor' => "High",
            'avg_growth_days' => 14
        ),
        array(
            'name' => "Salvador Dali",
            'creep_factor' => "Extreme",
            'avg_growth_days' => 62
        ),
        array(
            'name' => "Fu Manchu",
            'creep_factor' => "Very High",
            'avg_growth_days' => 58
        ),
    );

    // Access and display information from the array
    foreach ($moustaches as $arr) {
        echo "Name: " . $arr['name'] . "<br>";
        echo "Creep Factor: " . $arr['creep_factor'] . "<br>";
        echo "Average Growth Days: " . $arr['avg_growth_days'] . "<br>";
        echo "<br>";
    }

?>
