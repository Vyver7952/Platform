<?php
session_start();

if (!isset($_SESSION['visit'])) {
    header('location:gagallogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="center">
        <h1>Terima Kasih atas Kunjungannya</h1>
        <p>
            [ <a href="login.php">Login</a> ]
        </p>
    </div>
    <?php
    session_destroy();
    ?>
</body>

</html>