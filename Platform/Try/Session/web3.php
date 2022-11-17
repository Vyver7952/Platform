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
    <h1>Ini Halaman Ketiga</h1>
    <?php
        session_destroy();
    ?>
</body>

</html>

<?php
}
?>