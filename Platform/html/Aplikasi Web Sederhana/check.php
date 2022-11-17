<?php
session_start();
$user = "vyver007";
$pass = "daniel145";

$username = $_POST['username'];
$password = $_POST['password'];

if (($username == $user) and ($password == $pass)) {
    $_SESSION['visit'] = "Daniel Budi Prasetyo";
    header('location:pilih.php');
} else {
    header('location:gagallogin.php');
}
?>