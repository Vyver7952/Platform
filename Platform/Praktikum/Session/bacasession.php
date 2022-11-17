<?php
    session_start();
    // Memulai Session
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Membaca Nilai Session</title>
        <!-- Memberi nama tab webside dengan nama 'Membaca Nilai Session' -->
    </head>

    <body>
        <?php
        if(isset($_SESSION['pengguna'])){ // Mengecek apakah session 'pengguna' sudah memiliki nilai atau belum
            echo "<h1>Selamat Datang, ".$_SESSION['pengguna']."</h1>";
            // PHP memanipulasi HTML untuk membuat header dengan judul 'Selamat Datang, 'value dari Session pengguna''
        }
        ?>
    </body>
</html>