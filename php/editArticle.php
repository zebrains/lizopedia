<?php

$server   = "localhost";
$user     = "root";
$pass     = "";
$database       = "lizopedia";

$conn = mysqli_connect($server, $user, $pass, $database);

// Check connection
if (!$conn) {
    print "Connection failed: " . mysqli_connect_error();
}

$id = filter_input(INPUT_GET, ‘id’, FILTER_SANITIZE_STRING);
$title = filter_input(INPUT_GET, ‘title’, FILTER_SANITIZE_STRING);
$content = filter_input(INPUT_GET, ‘content’, FILTER_SANITIZE_STRING);

$query = "UPDATE `articles` SET title='$title', content='$content' WHERE id=$id;";

print $query. "\n";
if ($conn->query($query) === TRUE) {
    //New record created successfully
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
