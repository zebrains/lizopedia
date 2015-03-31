<?php

$server   = "localhost";
$user     = "root";
$pass     = "";

$conn = mysqli_connect($server, $user, $pass);

// Check connection
if (!$conn) {
    print "Connection failed: " . mysqli_connect_error();
}

$query = <<<SQL
CREATE DATABASE `lizopedia`;

USE `lizopedia`;

CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

SQL;
if ($conn->multi_query($query) === TRUE) {
    //New record created successfully
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
