<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: homepage.php");
    exit;
}

require_once('config.php');

$username = ""; 
$password = "";
$username_err = "";
$password_err = "";
$login_err = "";

?>

<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Assignment Demo</title>
</head>

<body>
	<div>
			<form action="homepage.php" method="post"></form>	
			<p>Username: <input id="name" type="text"></p>
			<p>email: <input name="email" type="email"></p>
			<p>Password: <input name="password" type="password"></p>
			
			<input type="submit" id="btn0" value="Login">
		
	</div>
</body>

</html>