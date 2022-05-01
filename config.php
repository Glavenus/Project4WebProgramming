<?php

$servername = "localhost";
$username = "areyes17";
$password = "areyes17";
$dbname = "areyes17";
 
/* Attempt to connect to MySQL database */
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if($conn->connect_error){
	echo "Could not connect to server\n";
	die("Connection failed: " . $conn->connect_error);
}
else {
	echo "Connection established\n";
}

?>