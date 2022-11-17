<?php
session_start();
?>

<?php
if (!isset($_SESSION['visit'])) {
    header("location:gagal.php");
} else {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Ini Halaman Kedua</h1>
</body>

</html>

<?php
}
?>