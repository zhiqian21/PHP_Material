<?php

$db_server = "localhost";
$db_user = "root";
$db_pw = "";
$db_name = "prac";

try{

    $conn = mysqli_connect($db_server, $db_user, $db_pw, $db_name);

} catch(mysqli_sql_exception) {

    echo "Could not connect";
    
}

if(!$conn){
    die("Failed to connect with database");
}

?>