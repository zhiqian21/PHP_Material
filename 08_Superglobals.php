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
            if(isset($_POST)){
                echo $_POST['name'] . ", your name form is submitted";
            }
        ?>
    <!--
    * $_POST - COLLECT DATA FROM HTML FORM [INVISIBLE]
    * $_GET - COLLECT DATA FROM HTML FORM  [VISIBLE]
    * $_SERVER - 
    * $_COOKIE - SMALL FILE THAT THE WEB SERVER STORES ON THE CLIENT'S COMPUTER TRACK INFORMATION, ONLY CAN STORE USER DATA  
    * $_SESSION
    * $_FILES
    -->
    </BODY>


</HTML>


