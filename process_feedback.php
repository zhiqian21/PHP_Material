<?php
$servername = "localhost";
$username = "User01";
$password = "user01";
$database = "feedbackdb";

error_reporting(E_ALL);
ini_set('display_errors', 1);
error_log(print_r($_POST, true));

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data
$name = "John Doe";
$email = "john@example.com";
$rating = 5;
$comments = "Great experience!";

// Insert data into the feedback table
$sql = "INSERT INTO feedback (name, email, rating, comments) VALUES ('$name', '$email', $rating, '$comments')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
