<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login.css">
    <title>Login | Pengelolaan Keuangan</title>
</head>
<body>



<div class="login">
    <h3>Login</h3>

    <form action="./prosesLogin.php" method="post">
        <div class="login-items">
            <label for="usernameLogin">Username</label><br>
            <input type="text" name="usernameLogin" id="usernameLogin" placeholder="Enter your username">
        </div>
        <div class="login-items">
            <label for="password1Login">Password</label><br>
            <input type="password" name="password1Login" id="password1Login" placeholder="Enter your Password">
        </div> 

        <div class="submit-form">
            <input class="submit" type="submit" value="Login">
        </div>
        </form>
</div>
</body>
</html>