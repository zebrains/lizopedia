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

$query = "Select id, title, content FROM `articles` ORDER BY 'title' ASC;";

if($result = mysqli_query($conn, $query)){

  $data = array();

  while($row = mysqli_fetch_assoc($result)) {
    // Add client side bool to watch editing.
    $row['editing'] = false;
    $data[] = $row;
  }
    echo json_encode($data);


} else {
  print("blah!");
}


$conn->close();
