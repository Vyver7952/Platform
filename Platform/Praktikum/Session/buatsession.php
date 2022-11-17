<?php
    session_start();
    // Memulai Session
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Session</title>
        <!-- Memberi nama tab webside dengan nama 'Membuat Session' -->
    </head>

    <body>
        <?php
        $_SESSION['pengguna'] = "Joko Sembung";
        // Membuat sebuah session dengan nama 'pengguna' dan memiliki value yaitu 'Joko Sembung'
        echo "<h1>Selamat, variable session sudah terbentuk</h1>";
        // PHP memanipulasi HTML untuk membuat header dengan judul 'Selamat, variable session sudah terbentuk'
        ?>
    </body>
</html>