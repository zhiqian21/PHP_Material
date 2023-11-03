<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE>FORM</TITLE>
    </HEAD>
    <BODY>
        <!--post method-->
        <form action="08_Superglobals.php" method ="post">
            <input type = "text" name="name">
            <input type = "text" name="age">
            <button type="submit">SUBMIT</button>
        </form>

        <?php
            if(isset($_POST)){
                echo $_POST['name'] . ", your name form is submitted";
            }
        ?>


        <!-- GET method -->
        <form action="08_Superglobals.php" method ="get">
            <input type = "text" name="name">
            <input type = "text" name="age">
            <button type="submit">SUBMIT</button>
        </form>

        <?php
            if(isset($_GET)){
                echo $_GET['name'] . ", your name form is submitted";
            }
        ?>
    <!--
    * $_POST - COLLECT DATA FROM HTML FORM [INVISIBLE IN URL]
    * $_GET - COLLECT DATA FROM HTML FORM  [VISIBLE IN URL]
    * $_SERVER - 
    * $_COOKIE - SMALL FILE THAT THE WEB SERVER STORES ON THE CLIENT'S COMPUTER TRACK INFORMATION, ONLY CAN STORE USER DATA  
    * $_SESSION - EXISTS AS LONG AS THE BROWAER IS OPEN [FOR SENSITIVE INFO]
    * $_FILES
    -->

        <?php
            session_start();

            //storing information
            $_SESSION["Name"] = "Dary";
            $_SESSION["Age"] = 19;

            echo "Hello " . $_SESSION["Name"];

            session_destroy();

            echo "Hello " . $_SESSION["Name"];
        ?>


        <?php
            /**
             * ARGUMENT OF COOKIES
             * name of the cookies
             * value of the cookies
             * expire   [if do not include expire, the cookies only stored for current session]
             * path of cookies
             * domain
             * security
             */
            $time = time() + 86400 * 30;
            setcookie("name","Dary", $time);
            echo $_COOKIE['name'];
        ?>
    </BODY>


</HTML>


