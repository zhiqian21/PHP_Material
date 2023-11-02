<!DOCTYPE html>
<html>
    <head>
        <title>Include and Require Test</title>
    </head>
    <body>
    <?php

        #INCLUDE - IF THE FILE NOT EXIST, IT WILL GENERATE E_WARNING
            include 'try.php';
            echo "Hello world..";

        #REQUIRE - IF THE FILE NOT EXIST, IT WILL GENERATE E_COMPILER ERROR
            require 'menu6.php';
            echo "Hello world..";

        #include_once
        include "menu.php";
        include_once "menu.php";
        /**
         * the content only show once, doesn't duplicate
         */

         #require_once
         require "menu.php";
         require_once "try.php";


    ?>
    </body>
</html>
