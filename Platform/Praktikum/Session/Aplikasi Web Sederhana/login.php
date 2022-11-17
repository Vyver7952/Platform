<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
    </div>
    <div class="container">
        <form action="check.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" required>
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" required>
            <br>
            <input class="login-btn" type="submit" value="Masuk">
        </form>
    </div>
</body>

</html>