<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Assignment Demo</title>
</head>

<body>

<?php

$servername = "localhost";
$username = "areyes17";
$password = "areyes17";
$dbname = "areyes17";

// The above used four variables servername,username,password and dbname 
// are according to my environment setting.

// Now your task would be to check 
// what your values would be accoring to your environment and change the values of above mentioned variables

// Note : This is the most crucial step for you DB connection. Please double check and change the values.

// Create connection

// create a variable conn and use it to establish the connection to the DB
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE USERS (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(20) NOT NULL UNIQUE, 
	email VARCHAR(50) NOT NULL, 
	password VARCHAR(20) NOT NULL)";

if ($conn->query($sql) === TRUE) {
	echo "Table users created successfully";
  } else {
	echo "Error creating table: " . $conn->error;
  }

$conn->close();
?>  
</body>

</html>