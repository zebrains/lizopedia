<?php

$server   = "localhost";
$user     = "root";
$pass     = "";
$db       = "lizopedia";

$conn = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$title = $_GET['title'];
$content = $_GET['content'];

$query = "INSERT INTO `articles` (title, content) VALUES ('$title', '$content')";

if ($conn->query($query) === TRUE) {
    //New record created successfully
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>
