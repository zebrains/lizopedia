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

$id = $_GET['id'];
$title = $_GET['title'];
$content = $_GET['content'];

$query = "UPDATE `articles` SET title='$title', content='$content' WHERE id=$id;";

print $query. "\n";
if ($conn->query($query) === TRUE) {
    //New record created successfully
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>
