<?php
// var_dump($_FILES['file']);
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    # explode from punctuation mark
    $tempExtension = explode('.', $name);

    $fileExtension = strtolower(end($tempExtension)); 

    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 3000000) {
                $newFileName = uniqid('', true) . "." . $fileExtension;
                $fileDestination = "uploads1" . $newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
                echo "Upload success";
                var_dump($file);
            } else {
                echo "Your file size is too big";
            }
        } else {
            echo "Sorry, there was an error!";
        }
    } else {
        echo "Sorry, your file type is not accepted";
    }
}
?>
