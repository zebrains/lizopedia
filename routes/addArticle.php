<?php

$server   = "localhost";
$user     = "root";
$pass     = "";
$database       = "lizopedia";

$conn = mysqli_connect($server, $user, $pass, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$title = filter_input(INPUT_GET, ‘title’, FILTER_SANITIZE_STRING);
$content = filter_input(INPUT_GET, ‘content’, FILTER_SANITIZE_STRING);

$query = "INSERT INTO `articles` (title, content) VALUES ('$title', '$content')";

if ($conn->query($query) === TRUE) {
    //New record created successfully
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
