<!DOCTYPE html>
<html>
    <head><title>Exercise</title></head>
    <body>
    <form action="Exercise02.php" method="post">
        Num: 
        <input type="text" name="num"><br>
        <input type="submit">
    </form>
    </body>


<?php
#take the value from form submission

$num = $_POST["num"];

switch($num){
    case 1:
        echo "Spades";
        break;
    case 2:
        echo "Hearts";
        break;
    case 3:
        echo "Diamonds";
        break;
    case 4:
        echo "Clubs";
        break;
    default:
        echo "The value is not acceptable";
}

?>
</html>