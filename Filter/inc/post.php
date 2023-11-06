<?php
if(filter_has_var(INPUT_POST, 'name')){
    echo 'The name variable exists:' . htmlspecialchars($_POST['name']);
}
else{
    echo 'The name variable is required';
}
?>