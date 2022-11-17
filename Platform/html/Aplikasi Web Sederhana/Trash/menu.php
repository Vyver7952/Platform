<?php
session_start();
$user = "vyver7952";
$pass = "daniel20145";

$username = $_POST['username'];
$password = $_POST['password'];

if (($username == $user) and ($password == $pass)) {
    $_SESSION['visit'] = "TRUE";
} else {
    header('location:gagal.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Commerce</title>
</head>

<body>
    <h1>Main Menu</h1>
    <a href="pilih.php">Pilih Item</a>
    <a href="keranjang.php">Keranjang</a>
    a
</body>

</html>