<!DOCTYPE html>
<html>
    <head>
        <title>Include and Require Test</title>
    </head>
    <body>
    <?php

        #INCLUDE - IF THE FILE NOT EXIST, IT WILL GENERATE E_WARNING
            include('menu6.php');
            echo "Hello world..";
            
        #REQUIRE - IF THE FILE NOT EXIST, IT WILL GENERATE E_COMPILER ERROR
            require('menu6.php');
            echo "Hello world..";

    ?>
    </body>
</html>
