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
	<title>PropertyRus Login</title>
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<div>
			<form action="homepage.php" method="post">	
				<p><label for="username"><b>Username</b></label>
				<input id="name" type="text">
				<p><label for="password"><b>Password</b></label>
				<input name="password" type="password">
			
				<input type="submit" id="btn0" value="Login">
			</form>
		
	</div>
</body>

</html>