<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
        $_SESSION['visit'] = 'TRUE';
    ?>
    <h1>Ini Halaman Pertama</h1>
</body>

</html>