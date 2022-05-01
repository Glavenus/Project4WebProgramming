<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    
<div>

<?php 
if(isset($_POST['create'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];


    $sql = "INSERT INTO users (username, email, password, usertype) VALUES('$username', '$email', '$password', '$usertype')";
    if($conn->query($sql) === TRUE){
        echo 'saved';
    }else{
        echo 'failed';
    }
}

?>
</div>


<div>
    <form action="login.php" method="post">
        <div class="container">
            <h1>Registration</h1>
            <p>Fill out registration</p>

            <label for="username"><b>Username</b></label>
            <input type="text" name="username" required>

            <label for="email"><b>Email</b></label>
            <input type="text" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="text" name="password" required>

            <label for="usertype"><b>User Type</b></label>
            <input type="text" name="usertype" required>

            <input type="submit" name="create" value="Sign Up">
        </div>
    </form>
</div>

</body>
</html>