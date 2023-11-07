<?php
    /**
     * hashing - transforming sensitive data (pw) into letters, numbers
     *         - hide the original data from third parties
     */

    $password = "abc123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    //cmp if the pw is same as hash or not
    if(password_verify("abc123",$hash)){
        echo "You're logged in.";
    } else{
        echo "Incorrect password";
    }
?>